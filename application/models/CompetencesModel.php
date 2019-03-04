<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CompetencesModel extends CI_Model {

    //Determine la table utilisée
    function __construct()
    {
        parent::__construct();
        $this->table = "ttp_competences";
    }

    //Recupere toutes les competences
    function get_all()
    {
        return $this->db->get($this->table);
    }

    //Recupere une competence
    function get_one($competences_id)
    {
        $this->db->select("competences_id, competences_name")
            ->from($this->table)
            ->where("competences_id", $competences_id);

        return $this->db->get();
    }

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */
