<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ExperienceModel extends CI_Model {

    //Determine la table utilisée
    function __construct()
    {
        parent::__construct();
        $this->table = "ttp_experiences";
    }
    //Recupere toutes les expériences
    function get_all()
    {
        return $this->db->get($this->table);
    }

    //Recupere une experience d'un cv
    function get_one($ttp_cv_cv_id)
    {
        $this->db->select("experiences_id, experiences_titre, experiences_description, experiences_niv, experiences_debut, experiences_fin, ttp_domaines_domaines_id")
            ->from($this->table)
            ->where("ttp_cv_cv_id", $ttp_cv_cv_id)
            ->limit(1);

        return $this->db->get();
    }

    //Insertion experiences en bdd
    function post($experiences_titre, $experiences_description, $experiences_niv, $experiences_debut, $experiences_fin,$ttp_domaines_domaines_id,$ttp_cv_cv_id)
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
