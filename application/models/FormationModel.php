<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FormationModel extends CI_Model {

    //Determine la table utilisée
    function __construct()
    {
        parent::__construct();
        $this->table = "ttp_formations";
    }

    //Recupere toutes les formations
    function get_all()
    {
        return $this->db->get($this->table);
    }

    //Recupere les formations d'un cv
    function get_one($ttp_cv_cv_id)
    {
        $this->db->select("formations_id, formations_titre, formations_description, formations_niv, formations_debut, formations_fin, ttp_domaines_domaines_id")
            ->from($this->table)
            ->where("ttp_cv_cv_id", $ttp_cv_cv_id)
            ->limit(1);

        return $this->db->get();
    }

    //Insertion formations en bdd
    function post($formations_titre, $formations_description, $formations_niv, $formations_debut, $formations_fin,$ttp_domaines_domaines_id,$ttp_cv_cv_id)
    {
        $data = array(
            "formations_titre" => $formations_titre,
            "formations_description" => $formations_description,
            "formations_niv" => $formations_niv,
            "formations_debut" => $formations_debut,
            "formations_fin" => $formations_fin,
            "ttp_domaines_domaines_id" => $ttp_domaines_domaines_id
        );

        $this->db->insert($this->table, $data)
        ->where("ttp_cv_cv_id", $ttp_cv_cv_id);
    }

    //Modifie une formation dans un cv
    function put($formations_id, $formations_titre, $formations_description, $formations_niv, $formations_debut, $formations_fin,$ttp_domaines_domaines_id,$ttp_cv_cv_id)
    {
        $data = array(
            "formations_titre" => $formations_titre,
            "formations_description" => $formations_description,
            "formations_niv" => $formations_niv,
            "formations_debut" => $formations_debut,
            "formations_fin" => $formations_fin,
        );

        $this->db->where("formations_id", $formations_id)
            ->where("ttp_domaines_domaines_id", $ttp_domaines_domaines_id)
            ->update($this->table, $data);
    }

    //Supprime une formation
    function delete($id)
    {
        $this->db->where_in("id", $id)
            ->delete($this->table);
    }

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */
