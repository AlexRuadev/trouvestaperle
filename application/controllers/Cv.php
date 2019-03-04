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



            $id = $this->session->userdata('utilisateurs_id');
            $user = $this->UtilisateursModel->selectUserAction($id);


            $competences = $this->CompetencesModel->all_competences();
            $domaines = $this->DomaineModel->all_domaines();



            $this->form_validation->set_rules('titre', 'titre', 'trim|strip_tags|required');
            $this->form_validation->set_rules('description', 'description', 'trim|strip_tags|required');
            $this->form_validation->set_rules('niveau', 'niveau', 'required');
            $this->form_validation->set_rules('debutFormation', 'debutFormation', 'required');
            $this->form_validation->set_rules('finFormation', 'finFormation', 'required');
            $this->form_validation->set_rules('domaines', 'domaines', 'trim|strip_tags|required');

            echo '<pre>';
            print_r($user);
            echo '</pre>';

            $this->load->view('template/header');
            $this->load->view('formulaire_cv', array("competences" => $competences,
                "domaines" => $domaines)) ;
            $this->load->view('template/footer');



            if ($this->form_validation->run() === FALSE) {

            $this->load->view('template/header');
            $this->load->view('formulaire_cv');
            $this->load->view('template/footer');

          } else{



                //insertion de l'input experience1 en bdd
              $inputexperience1 = $this->input->post('experience1');
                $this->db->set('ttp_experiences', $inputexperience1);
                //insertion de l'input experience2 en bdd
                $inputexperience2 = $this->input->post('experience2');
                $this->db->set('ttp_experiences', $inputexperience2);


                $this->load->view('template/header');
                $this->load->view('formulaire_cv');
                $this->load->view('template/footer');

            }

        }else{
            show_404();
            }
}
}
