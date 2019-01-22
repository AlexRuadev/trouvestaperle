<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_product extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->table = "ttp_utilisateurs";
    }


    function get_one($id)
    {
        $this->db->select("id, nom, prenom, num, mail, codepostal, motdepasse, created_at, modif, permis")
            ->from($this->table)
            ->where("id", $id)
            ->limit(1);

        return $this->db->get();
    }

    function post($mail, $nom, $prenom, $motdepasse)
    {
        $data = array(
            "mail" => $mail,
            "nom" => $nom,
            "prenom" => $prenom,
            "motdepasse" => $motdepasse,
        );

        $this->db->insert($this->table, $data);
    }

    function put($id, $nom, $prenom, $num, $mail, $codepostal, $motdepasse, $modif, $permis)
    {
        $data = array(
            "nom" => $nom,
            "prenom" => $prenom,
            "num" => $num,
            "mail" => $mail,
            "codepostal" => $codepostal,
            "motdepasse" => $motdepasse,
            "modif" => $modif,
            "permis" => $permis,
        );

        $this->db->where("id", $id)
            ->update($this->table, $data);
    }


    function delete($id)
    {
        $this->db->where_in("id", $id)
            ->delete($this->table);
    }

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */