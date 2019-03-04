<?php defined('BASEPATH') OR exit('No direct script access allowed');

class bdd extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("CompetencesModel");
        $this->load->model("CvModel");
        $this->load->model("DomaineModel");
        $this->load->model("ExperienceModel");
        $this->load->model("FormationModel");
        $this->load->model("UcModel");
        $this->load->model("UtilisateursModel");

    }

    public function index()
    {
        $data = $this->UtilisateursModel->get_all_uti();


        $result = array();
        if ($data->num_rows() > 0){
            foreach ($data->result() as $row){
                $result[] = $this->view(intval($row->id));   // Création d'un tableau avec les données de chaque candidat.
            }
            echo json_encode($result,true);

        }
        else{
            header("HTTP/1.0 204 No Content");
            echo json_encode("204: no products in the database",true);
        }
    }

    public function view($id)
    {


        $datatest = $this->UtilisateursModel->get_one_uti($id);

        if ($datatest->num_rows() > 0) {
            foreach ($datatest->result() as $row) {
                $result[] = array("id" => intval($row->id));
            }
            var_dump($result);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo json_encode("404 : Product #$id not found");
        }



        $dataCv = $this->CvModel->get_one_cv($id);

        if(isset($dataCv['cv_id'])){
            $idcv = $dataCv['cv_id'];
            $dataUc = $this->UcModel->get_one_uc($idcv);
            $dataFormation = $this->FormationModel->get_one_for($idcv);
            $dataExperience = $this->ExperienceModel->get_one_ex($idcv);

            if (isset($dataUc['ttp_competences_competences_id'])){

                $idcomp = $dataUc['ttp_competences_competences_id'];

                $dataCompetences = $this->CompetencesModel->get_one($idcomp);

            }

            if (isset($dataFormation['ttp_domaines_domaines_id']) && isset($dataExperience['ttp_domaines_domaines_id'])){

                $dataForm = $dataFormation['ttp_domaines_domaines_id'];
                $dataExp = $dataExperience['ttp_domaines_domaines_id'];

                $dataDomainForm = $this->DomaineModel->get_one_do($dataForm);

                $dataDomainExp = $this->DomaineModel->get_one_do($dataExp);

            }




        }



        if ($dataCv->num_rows() > 0) {
            foreach ($dataUtilisateur->result() as $row) {
                $result[] = array(intval($row->id));
            }
            foreach ($dataUc->result() as $row) {
                $result[] = array(intval($row->id));
            }
            foreach ($dataFormation->result() as $row) {
                $result[] = array(intval($row->id));
            }
            foreach ($dataExperience->result() as $row) {
                $result[] = array(intval($row->id));
            }
            foreach ($dataCompetences->result() as $row) {
                $result[] = array(intval($row->id));
            }
            foreach ($dataDomainForm->result() as $row) {
                $result[] = array(intval($row->id));
            }
            foreach ($dataDomainExp->result() as $row) {
                $result[] = array(intval($row->id));
            }
            echo json_encode($result,true);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo json_encode("404 : Product #$id not found",true);
        }
    }


}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */