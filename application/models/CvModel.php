<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CvModel extends CI_Model {

	//Choix de la table
	function __construct()
	{
		parent::__construct();
		$this->table = "ttp_cv";
	}

	//Récupère tous les cv
	function get_all_cv($id)
	{
		$this->db->select("cv_id")
			->from($this->table)
			->where("ttp_utilisateurs_utilisateurs_id", $id);

		return $this->db->get();
	}

	//Insertion du cv en BDD
	function post()
	{
		$data = array();

		$this->db->insert($this->table, $data)
			->where("ttp_utilisateurs_utilisateurs_id");
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
