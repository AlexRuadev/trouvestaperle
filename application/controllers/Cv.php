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

    //Fonction permettant le visu du Formulaire CV
    public function viewCv()
    {
        $this->load->view('template/header');
        $this->load->view('formulaire_cv');
        $this->load->view('template/footer');
    }

    //Fonction pour enregistrer les valeurs du CV en BDD
    public function formCv(){
//        $this->db->set('utilisateurs_modif ', 'NOW()', false);
//        $experience = $this->db->get('ttp_experiences')->result();
//        print_r($experience);
        //insertion de l'input experience1 en bdd
        $inputexperience1 = $this->input->post('experience1');
        $this->db->set('ttp_experiences', $inputexperience1);
        //insertion de l'input experience2 en bdd
        $inputexperience2 = $this->input->post('experience2');
        $this->db->set('ttp_experiences', $inputexperience2);
        $id = $this->session->userdata('utilisateurs_id');
        $user = $this->UtilisateursModel->selectUserAction($id);
//		echo '<pre>';
//        print_r($user);
//		echo '</pre>';
//		echo $this->session->userdata('utilisateurs_prenom');
        $this->load->view('template/header');
        $this->load->view('formulaire_cv');
        $this->load->view('template/footer');
    }
}