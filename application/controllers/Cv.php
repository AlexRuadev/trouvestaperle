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


            $competences = $this->CompetencesModel->all_competences();
            $domaines = $this->DomaineModel->all_domaines();




            $this->form_validation->set_rules('titre', 'titre', 'trim|strip_tags|required');
            $this->form_validation->set_rules('description', 'description', 'trim|strip_tags|required');
            $this->form_validation->set_rules('niveau', 'niveau', 'required');
            $this->form_validation->set_rules('debutFormation', 'debutFormation', 'required');
            $this->form_validation->set_rules('finFormation', 'finFormation', 'required');
            $this->form_validation->set_rules('domaines', 'domaines', 'trim|strip_tags|required');

            $this->form_validation->set_rules('titre2', 'titre2', 'trim|strip_tags|required');
            $this->form_validation->set_rules('description2', 'description2', 'trim|strip_tags|required');
            $this->form_validation->set_rules('anciennete', 'anciennete', 'required');
            $this->form_validation->set_rules('debutExperience', 'debutExperience', 'required');
            $this->form_validation->set_rules('finExperience', 'finExperience', 'required');
            $this->form_validation->set_rules('domaines2', 'domaines2', 'trim|strip_tags|required');







            if ($this->form_validation->run() === FALSE) {

            $this->load->view('template/header');
            $this->load->view('formulaire_cv', array("competences" => $competences,
                    "domaines" => $domaines)) ;
            $this->load->view('template/footer');

          } else{
                $this->CvModel->create_cv($id);
                $cv_id = $this->db->insert_id();

                $this->confirmcv->confirmationcv();

                $this->FormationModel->create_formation($cv_id);

                $this->ExperienceModel->create_experience($cv_id);

                $this->UcModel->creation_lien_competences($cv_id);



                $this->load->view('template/header');
                $this->load->view('viewProfil', array("competences" => $competences,
                    "domaines" => $domaines)) ;
                $this->load->view('template/footer');

            }

        }else{
            redirect(base_url());
            }
}
}
