<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/01/2019
 * Time: 13:42
 */
class Cv extends CI_Controller
{
    //Charge les models , librairies, helper
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url_helper');
        $this->load->library('Confirmcv');
        $this->load->model("CvModel");
        $this->load->model("CompetencesModel");
        $this->load->model("DomaineModel");
        $this->load->model("ExperienceModel");
        $this->load->model("FormationModel");
        $this->load->model("UcModel");
        $this->load->model("UtilisateursModel");

    }
    //Affiche la page success
    public function affichageSuccess(){

        $this->load->view('template/header');
        $this->load->view('success');
        $this->load->view('template/footer');
    }


    // Work in progress pour lister les cv
/*    public function listCv(){

        $id = $_SESSION['utilisateurs_id'];

        $cv_id['datas'] = $this->CvModel->get_all_cv($id);


        foreach ($cv_id['datas'] as $cv_id['data'])
        {
            echo '<pre>';
            print_r($cv_id['data']);
            echo '</pre>';
        }

        $dataCv = $this->CvModel->get_one_cv($id)->result_array();


        if(isset($dataCv[0]['cv_id'])) {


            $idUti = $dataCv[0]['ttp_utilisateurs_utilisateurs_id'];
            $idcv = $dataCv[0]['cv_id'];

            echo '<pre>';
            print_r($idcv);
            echo '</pre>';

            $result['Uti'] = $this->UtilisateursModel->get_one_uti($idUti)->result_array();
            $result['comp'] = $this->CompetencesModel->get_one($idcv)->result_array();
            $result['Form'] = $this->FormationModel->get_one_for($idcv)->result_array();
            $result['Exp'] = $this->ExperienceModel->get_one_ex($idcv)->result_array();
            echo '<pre>';
            print_r($result);
            echo '</pre>';
        }

    }*/


    //Fonction pour enregistrer les valeurs du CV en BDD
    public function formCv(){

        if (isset($_SESSION['logged_in'])) {



            $id = $this->session->userdata('utilisateurs_id');


            $competences = $this->CompetencesModel->all_competences();
            $domaines = $this->DomaineModel->all_domaines();



            $this->form_validation->set_rules('titre', 'Titre', 'trim|strip_tags|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|strip_tags|required');
            $this->form_validation->set_rules('niveau', 'Niveau', 'required');
            $this->form_validation->set_rules('debutFormation', 'debutFormation');
            $this->form_validation->set_rules('finFormation', 'finFormation');
            $this->form_validation->set_rules('domaines', 'domaines', 'trim|strip_tags|required');
            $this->form_validation->set_rules('titre2', 'Titre', 'trim|strip_tags|required');
            $this->form_validation->set_rules('description2', 'Description', 'trim|strip_tags|required');
            $this->form_validation->set_rules('anciennete', 'Anciennete', 'required');
            $this->form_validation->set_rules('debutExperience', 'debutExperience');
            $this->form_validation->set_rules('finExperience', 'finExperience');
            $this->form_validation->set_rules('domaines2', 'domaines2', 'trim|strip_tags|required');







            if ($this->form_validation->run() === FALSE) {

            $this->load->view('template/header');
            $this->load->view('formulaire_cv', array("competences" => $competences,
                    "domaines" => $domaines)) ;
            $this->load->view('template/footer');

          } else{
                $this->CvModel->create_cv($id);
                $cv_id = $this->db->insert_id();

                $this->FormationModel->create_formation($cv_id);

                $this->ExperienceModel->create_experience($cv_id);

                $this->UcModel->creation_lien_competences($cv_id);

				$this->confirmcv->confirmationcv();


                $this->load->view('template/header');
                $this->load->view('success');
                $this->load->view('template/footer');

            }

        }else{
            redirect(base_url());
            }
}
}
