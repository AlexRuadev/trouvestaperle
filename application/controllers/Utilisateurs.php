<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23/01/2019
 * Time: 13:35
 */

class Utilisateurs extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("UtilisateursModel");
	}

    public function inscription()
    {
        $this->load->helper('url');
        $this->load->view('template/header.php');
        $this->load->view('formulaire_inscription.php');
        $this->load->view('template/footer.php');

    }

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('date');
		$this->db->set('utilisateurs_created_at ', 'NOW()', false);

		$this->form_validation->set_rules('mail', 'mail', 'required');
		$this->form_validation->set_rules('nom', 'nom','required');
		$this->form_validation->set_rules('prenom', 'prenom', 'required');
		$this->form_validation->set_rules('motdepasse', 'motdepasse', 'required');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('inscription');

		}
		else
		{
			$this->UtilisateursModel->post();
			$this->load->view('success');
		}
	}

}
