<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/01/2019
 * Time: 13:42
 */

class Cv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("UtilisateursModel");
        $this->load->model("CvModel");
    }


    public function formCv(){

        $this->db->set('utilisateurs_modif ', 'NOW()', false);

        $id = $this->session->userdata('utilisateurs_id');

        $user = $this->UtilisateursModel->get_one($id);


        $data = array(
            'nom' => $user[0]['utilisateurs_nom'],
            'prenom' => $user[0]['utilisateurs_prenom']
        );


        $this->load->view('formulaire_cv', $data);


    }
}