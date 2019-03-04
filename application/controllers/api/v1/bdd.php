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
        $data = $this->CompetencesModel->get_all();
        //$data = $this->CvModel->get_all_cv();
        //$data = $this->DomaineModel->get_all_do();
        //$data = $this->ExperienceModel->get_all_ex();
        //$data = $this->FormatonModel->get_all_for();
        //$data = $this->UcModel->get_all_uc();
        //$data = $this->UtilisateursModel->get_all_uti();


        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $result[] = $this->view(intval($row->id));
            }
            echo json_encode($result);
        } else {
            header("HTTP/1.0 204 No Content");
            echo json_encode("204: no products in the database");
        }
    }

    public function view($id)
    {
        $data = $this->Model_product->get_one($id);

        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $result[] = array("id" => intval($row->id), "title" => $row->title);
            }
            echo json_encode($result);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo json_encode("404 : Product #$id not found");
        }
    }


}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */