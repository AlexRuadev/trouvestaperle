<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CvModel extends CI_Model {

	//Choix de la table
	function __construct()
	{
		parent::__construct();
		$this->table = "ttp_cv";
	}

function get_all()
{
return $this->db->from($this->table)->get();
}

	//Récupère tous les cv
	function get_all_cv($id)
	{
		$this->db->select("cv_id")
			->from($this->table)
			->where("ttp_utilisateurs_utilisateurs_id", $id)
		    ->order_by('cv_created_at ', 'DESC');

		return $this->db->get()->result_array();
	}

    //Recupere les cv d'un utilisateur
    function get_one_cv($cv_id)
    {
        $this->db->select("*")
            ->from($this->table)
            ->where("cv_id", $cv_id)
            -> limit(1);

        return $this->db->get();
    }

	//Insertion du cv en BDD
	function create_cv($id)
	{

        $this->db->set('cv_created_at ', 'NOW()', false);
		$data = array(
		    "ttp_utilisateurs_utilisateurs_id" => $id);

		$this->db->insert($this->table, $data);
	}

	//Modif données CV
	function put($cv_id)
	{
		$data = array();

		$this->db->where("cv_id", $cv_id)
			->update($this->table, $data);
	}

	//Possibilite de supression du CV
	function delete($cv_id)
	{
		$this->db->where_in("cv_id", $cv_id)
			->delete($this->table);
	}

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */
