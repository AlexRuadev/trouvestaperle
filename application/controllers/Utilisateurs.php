<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23/01/2019
 * Time: 13:35
 */

class Utilisateurs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("UtilisateursModel");
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->helper('security');
	}

	//Fonction de listing des différents utilisateurs
	public function viewProfil($id)
	{
		//on vérifie si la session existe
		if (isset($_SESSION['utilisateurs_id'])) {
			//On verifie que l'id dans l'url correspondent bien à celui de la session ouverte
			if ($id === $_SESSION['utilisateurs_id']){
				//On charge la vue correspondante
				$this->load->view('template/header.php');
				$this->load->view('profil.php');
				$this->load->view('template/footer.php');
			}else{
				show_404();
			}
		}else{
			show_404();
		}
	}

	public function modifProfil($id)
	{
		//on vérifie si la session existe
		if (isset($_SESSION['utilisateurs_id'])) {
			//On verifie que l'id dans l'url correspondent bien à celui de la session ouverte
			if ($id === $_SESSION['utilisateurs_id']){
				$this->form_validation->set_rules('nom', 'nom', 'trim|required|strip_tags|xss_clean|min_length[3]|max_length[45]');
				$this->form_validation->set_rules('prenom', 'prénom', 'trim|required|strip_tags|xss_clean|min_length[3]|max_length[45]');
				$this->form_validation->set_rules('mail', 'email', 'trim|strip_tags|required|valid_email');
				$this->form_validation->set_rules('telephone', 'telephone', 'trim|is_numeric|xss_clean|min_length[6]|max_length[15]');
				$this->form_validation->set_rules('codepostal', 'Code Postal', 'trim|is_numeric|xss_clean|min_length[2]|max_length[5]');
				$this->form_validation->set_rules('permis', 'Permis', 'trim|strip_tags|xss_clean|min_length[2]|max_length[8]');

				if ($this->form_validation->run() == false){
					$this->load->view('template/header.php');
					$this->load->view('modifprofil.php');
					$this->load->view('template/footer.php');
				}else{
					$this->UtilisateursModel->modifUser();
					redirect(base_url());
				}

			}else{
				show_404();
			}
		}else{
			show_404();
		}

	}


	//Fcnction de création d'un nouvel uilisateurs
	public function inscriptionUser()
	{

		//Nous établissons les règles avant de lancer la validation de formulaire
		$this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean|min_length[3]|max_length[45]');
		$this->form_validation->set_rules('prenom', 'prénom', 'trim|required|xss_clean|min_length[3]|max_length[45]');
		$this->form_validation->set_rules('mail', 'email', 'trim|strip_tags|required|valid_email|is_unique[ttp_utilisateurs.utilisateurs_mail]', array('is_unique' => 'Cette adresse mail existe déjà'));
		$this->form_validation->set_rules('password', 'mot de passe', 'trim|strip_tags|required|min_length[6]');

		//Lancement de la validation du formulaire
		if ($this->form_validation->run() == false){

			//Cette page est chargé dans tout les cas et si li y a des erreurs alors elles seront affiché en même temps
			$this->load->view('template/header');
			$this->load->view('welcome_message');
			$this->load->view('template/footer');
		}else {

			//Si pas d'erreur on fait l'insertion via la fonction qui se trouve dans le modèle
			$this->UtilisateursModel->inscriptionAction();
			$this->load->view('template/header');
			$this->load->view('welcome_message');
			$this->load->view('template/footer');
		}
	}


	//Fonction pour pouvoir se connecter au site
	public function connectionUser()
	{

		//On défini nos variables correspondant aux inputs de notre formulaire
		$mail = $this->input->post('mail');
		$motdepasse = $this->input->post('password');

		//On appel la fonction créer en modèle pour donner une variable à ce tableau
		$user = $this->UtilisateursModel->test_mail($mail);

		//On défini les règles du formulaire
		$this->form_validation->set_rules('mail', 'email', 'trim|strip_tags|required');
		$this->form_validation->set_rules('password', 'mot de passe', 'trim|strip_tags|required');

		//On passe à la soumission
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header');
			$this->load->view('welcome_message');
			$this->load->view('template/footer');
			//Si il n'y a pas d'erreur des le debut
		} else {
			if (isset($user[0]['utilisateurs_mail'])) {
				if (password_verify($motdepasse, $user[0]['utilisateurs_motdepasse'])) {
					//Données enregisrées dans la session lors de la connexion
					$newdata = array(
						'utilisateurs_id' => $user[0]['utilisateurs_id'],
						'utilisateurs_nom' => $user[0]['utilisateurs_nom'],
						'utilisateurs_prenom' => $user[0]['utilisateurs_prenom'],
						'utilisateurs_mail' => $user[0]['utilisateurs_mail'],
						'utilisateurs_num' => $user[0]['utilisateurs_num'],
						'utilisateurs_naissance' => $user[0]['utilisateurs_naissance'],
						'logged_in' => true
					);
					$this->session->set_userdata($newdata);
					$this->load->view('template/header');
					redirect(base_url());
					$this->load->view('template/footer');
				}
				//Si le mot de passe est faux
				else {

					$this->load->view('template/header');
					$this->load->view('welcome_message');
					$this->load->view('template/footer');
				}
			}
			//Si l'email n'est pas trouvé
			else{
				$this->load->view('template/header');
				$this->load->view('welcome_message');
				$this->load->view('template/footer');
			}
		}
	}

	//Fonction de redirection suite à une déconnexion
	public function deconnexionUser()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function mailsend()
	{


	}

}

