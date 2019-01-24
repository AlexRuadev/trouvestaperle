<?php defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateursModel extends CI_Model {

	//Choix de la table
	function __construct()
	{
		parent::__construct();
		$this->table = "ttp_utilisateurs";
	}

	//Recuparation des donnees utilisateurs pour le profil
	function get_one($id)
	{
		$this->db->select("utilisateurs_id, utilisateurs_nom, utilisateurs_prenom, utilisateurs_num, utilisateurs_mail, utilisateurs_codepostal, utilisateurs_motdepasse, utilisateurs_created_at, utilisateurs_modif, utilisateurs_permis")
			->from($this->table)
			->where("utilisateurs_id", $id)
			->limit(1);

		return $this->db->get();
	}
    function test_mail($mail)
    {
        $this->db->from($this->table)
            ->where("utilisateurs_mail", $mail);


        return $this->db->get()->result_array();
    }
    function test_password($password)
    {
        $this->db->from($this->table)
            ->where("utilisateurs_motdepasse", $password)
            ->limit(1);

        return $this->db->get();
    }

	//Inscription Utilisateurs
	function inscription($hash,$token)
	{

		$data = array(
			"utilisateurs_mail " => $this->input->post('mail'),
			"utilisateurs_nom " => $this->input->post('nom'),
			"utilisateurs_prenom" => $this->input->post('prenom'),
			"utilisateurs_motdepasse" => $hash,
            "utilisateurs_token" => $token
		);

		$this->db->insert($this->table, $data);
	}

	//Modification du profil
	function put($id, $nom, $prenom, $num, $mail, $codepostal, $modif, $permis)
	{
		$data = array(
			"nom" => $nom,
			"prenom" => $prenom,
			"num" => $num,
			"mail" => $mail,
			"codepostal" => $codepostal,
			"modif" => $modif,
			"permis" => $permis,
		);

		$this->db->where("id", $id)
			->update($this->table, $data);
	}

	//Modification mot de passe
	function putPassword($id, $motdepasse, $token)
	{
		$data = array(
			"motdepasse" => $motdepasse,
			"token" => $token
		);
		$this->db->where("id", $id)
			->update($this->table, $data);
	}

	//Suppression Utilisateur
	function delete($id)
	{
		$this->db->where_in("id", $id)
			->delete($this->table);
	}

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */
