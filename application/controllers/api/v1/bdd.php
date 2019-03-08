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

    //Requete pour l'api , transformation en fichier json
    public function index()
    {
        $data = $this->CvModel->get_all();
        if ($data->num_rows() > 0){
            echo json_encode($data->result_array(),true);
        }
        else{
            header("HTTP/1.0 204 No Content");
            echo json_encode("204: no products in the database",true);
        }
    }

    //Requete pour l'api
    public function view($id)
    {

        $dataCv = $this->CvModel->get_one_cv($id)->result_array();

        if(isset($dataCv[0]['cv_id'])){


            $idUti = $dataCv[0]['ttp_utilisateurs_utilisateurs_id'];
            $idcv = $dataCv[0]['cv_id'];
            $result['Uti'] = $this->UtilisateursModel->get_one_uti($idUti)->result_array();
            $result['comp'] = $this->CompetencesModel->get_one($idcv)->result_array();
            $result['Form'] = $this->FormationModel->get_one_for($idcv)->result_array();
            $result['Exp'] = $this->ExperienceModel->get_one_ex($idcv)->result_array();






            echo json_encode($result,true);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo json_encode("404 : Product #$id not found",true);
        }
    }


}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
