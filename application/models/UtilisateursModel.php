<?php defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateursModel extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->table = "ttp_utilisateurs";
	}

	//Fonction qui va cherche tout les utilisateurs enregistre en BDD
	public function selectallAction()
	{
		$query = $this->db->get('ttp_utilisateurs');
		return $query->result();
	}


	//Fonction allant cherche l'utilisateurs selon l'id de la session
	public function selectUserAction()
	{
		//On définit notre id
		$id = $this->session->userdata('utilisateurs_id');
		$query = $this->db->get_where('ttp_utilisateurs', array('utilisateurs_id' => $id));

		return $query->result();

	}
	public function modifUser()
	{

		//On détermine la date de modification de l'utilisateurs
		$this->db->set('utilisateurs_modif ', 'NOW()', false);

		//On créer la variable data_form pour integrer les post dedans
		$data_form = $this->input->post(NULL, TRUE);

		//on détermine l'insertion des valeurs dans ce formulaire
		if ($data_form) {
			$nom = $data_form['nom'];
			$prenom = $data_form['prenom'];
			$email = $data_form['mail'];
			$numero = $data_form['telephone'];
			$codepostal = $data_form['codepostal'];
			$permis = $data_form['permis'];
			$date = $data_form['naissance'];
			$datas = array(
				'utilisateurs_nom' => $nom,
				'utilisateurs_prenom' => $prenom,
				'utilisateurs_mail' => $email,
				'utilisateurs_num' => $numero,
				'utilisateurs_codepostal' => $codepostal,
				'utilisateurs_permis' => $permis,
				'utilisateurs_naissance' => $date,
				'utilisateurs_token' => bin2hex(random_bytes(100)),
			);
			$this->db->where('utilisateurs_id', $_SESSION['utilisateurs_id']);
			$this->db->update('ttp_utilisateurs', $datas);
		}

	}


	public function inscriptionAction()
	{
		//On détermine la date de création de l'utilisateurs
		$this->db->set('utilisateurs_created_at ', 'NOW()', false);

		//On créer la variable datz_form pour integrer les post dedans
		$data_form = $this->input->post(NULL, TRUE);

		//on détermine l'insertion des valeurs dans ce formulaire
		if ($data_form) {
			$nom = $data_form['nom'];
			$prenom = $data_form['prenom'];
			$email = $data_form['mail'];
			$password = password_hash($data_form['password'], PASSWORD_DEFAULT);
			$datas = array(
				'utilisateurs_nom' => $nom,
				'utilisateurs_prenom' => $prenom,
				'utilisateurs_mail' => $email,
				'utilisateurs_motdepasse' => $password,
				'utilisateurs_token' => bin2hex(random_bytes(100)),
			);
			$this->db->insert('ttp_utilisateurs', $datas);
		}
	}

	//fonction permmettant de cherche dans tout les adresses mails existantes et de comparer
	function test_mail($mail)
	{
		$this->db->from($this->table)
			->where("utilisateurs_mail", $mail);
		return $this->db->get()->result_array();
	}


    function get_one_uti($utilisateurs_id)
    {
        $this->db->select('*')
            ->from($this->table)
            ->where("utilisateurs_id", $utilisateurs_id);


        return $this->db->get();
    }
    function get_all_uti()
    {
        return $this->db->get($this->table);
    }



}


/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */
