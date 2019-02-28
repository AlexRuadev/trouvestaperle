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
        $this->load->helper('form');
        $this->load->helper('url_helper');
        $this->load->model("CvModel");
        $this->load->model("CompetencesModel");
        $this->load->model("DomaineModel");
        $this->load->model("ExperienceModel");
        $this->load->model("FormationModel");
        $this->load->model("UcModel");
        $this->load->model("UtilisateursModel");
    }

    //Fonction pour enregistrer les valeurs du CV en BDD
    public function formCv(){

        if (isset($_SESSION['logged_in'])) {

            /*$id = $this->session->userdata('utilisateurs_id');
            $user = $this->UtilisateursModel->selectUserAction($id);


            $nom =  $this->input->post('nom');
            $prenom =  $this->input->post('prenom');
            $dateNaissance =  $this->input->post('dateNaissance');
            $numero =  $this->input->post('numero');
            $codePostal =  $this->input->post('codePostal');

            $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('prenom', 'prénom', 'trim|required|xss_clean|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('dateNaissance', 'dateNaissance', 'trim|required|xss_clean');
            $this->form_validation->set_rules('numero', 'numero', 'trim|required|xss_clean');
            $this->form_validation->set_rules('codePostal', 'codePostal', 'trim|required|xss_clean');*/

            /*if ($this->form_validation->run() === FALSE) {*/
/*
            $this->load->view('template/header');
            $this->load->view('formulaire_cv');
            $this->load->view('template/footer');*/

      /*      } else{*/



 /*               $this->UtilisateursModel->selectModifUser($id,$nom,$prenom,$dateNaissance,$numero,$codePostal);*/




                //insertion de l'input experience1 en bdd
       /*         $inputexperience1 = $this->input->post('experience1');
                $this->db->set('ttp_experiences', $inputexperience1);
                //insertion de l'input experience2 en bdd
                $inputexperience2 = $this->input->post('experience2');
                $this->db->set('ttp_experiences', $inputexperience2);*/


                $this->load->view('template/header');
                $this->load->view('formulaire_cv');
                $this->load->view('template/footer');

            }

       /* }else{
            show_404();
            }*/
}
}