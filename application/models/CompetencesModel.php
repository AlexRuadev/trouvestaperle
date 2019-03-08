<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CompetencesModel extends CI_Model {

    //Determine la table utilisée
    function __construct()
    {
        parent::__construct();
        $this->table = "ttp_competences";
        $this->jointable = "ttp_uc";
    }

    //Recupere toutes les données de la table
    function get_all()
    {
        return $this->db->get($this->table);
    }
    //Recupere toutes les competences
    public function all_competences()
    {
        $query = $this->db->get('ttp_competences');
        return $query->result_array();
    }

    //Recupere une competence
    function get_one($idcv)
    {
        $this->db->select("*")
            ->from($this->table)
            ->join($this->jointable, "ttp_competences.competences_id = ttp_uc.ttp_competences_competences_id")
            ->where("ttp_cv_cv_id", $idcv);

        return $this->db->get();
    }

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */
