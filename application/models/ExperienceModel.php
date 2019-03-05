<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ExperienceModel extends CI_Model {

    //Determine la table utilisée
    function __construct()
    {
        parent::__construct();
        $this->table = "ttp_experiences";
        $this->jointable = "ttp_domaines";
    }
    //Recupere toutes les expériences
    function get_all_ex()
    {
        return $this->db->get($this->table);
    }

    //Recupere une experience d'un cv
    function get_one_ex($ttp_cv_cv_id)
    {
        $this->db->select("*")
            ->from($this->table)
            ->where("ttp_cv_cv_id", $ttp_cv_cv_id)
            ->join($this->jointable, "ttp_domaines.domaines_id = ttp_experiences.ttp_domaines_domaines_id");

        return $this->db->get();
    }

    //Insertion experiences en bdd
    function post()
    {
        $data = array(
            "experiences_titre" => $experiences_titre,
            "experiences_description" => $experiences_description,
            "experiences_niv" => $experiences_niv,
            "experiences_debut" => $experiences_debut,
            "experiences_fin" => $experiences_fin,
            "ttp_domaines_domaines_id" => $ttp_domaines_domaines_id
        );

        $this->db->insert($this->table, $data)
            ->where("ttp_cv_cv_id", $ttp_cv_cv_id);
    }

    function create_experience($cv_id)
    {


        $data_form2 = $this->input->post(NULL, TRUE);


        $data = array(
            "experiences_titre" => $data_form2['titre2'],
            "experiences_description" => $data_form2['anciennete'],
            "experiences_niv" => $data_form2['anciennete'],
            "experiences_debut" => $data_form2['debutExperience'],
            "experiences_fin" => $data_form2['finExperience'],
            "ttp_domaines_domaines_id" => $data_form2['domaines2'],
            "ttp_cv_cv_id" => $cv_id
        );


        $this->db->insert($this->table, $data);
    }

    //Modifie une experience dans un cv
    function put($experiences_id, $experiences_titre, $experiences_description, $experiences_niv, $experiences_debut, $experiences_fin, $ttp_cv_id)
    {
        $data = array(
            "experiences_titre" => $experiences_titre,
            "experiences_description" => $experiences_description,
            "experiences_niv" => $experiences_niv,
            "experiences_debut" => $experiences_debut,
            "experiences_fin" => $experiences_fin
        );

        $this->db-> where('experiences_id',$experiences_id)
            ->where("ttp_cv_id", $ttp_cv_id)
            ->update($this->table, $data);
    }


    //Supprime une experience

    function delete($experiences_id)
    {
        $this->db->where_in("experiences_id", $experiences_id)
            ->delete($this->table);
    }

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */
