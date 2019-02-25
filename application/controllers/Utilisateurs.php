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
    }

    //Fonction de listing des différents utilisateurs
	public function viewUser()
	{
		//on va chercher nos valeurs sur le model pour pouvoir les afficher
		$data['users'] = $this->UtilisateursModel->selectallAction();

		//On charge la vue correspondante et on met en paramètre data pour cible ce que l'on cherche et afficher
		$this->load->view('essai/test.php', $data);
    }


    //Fcnction de création d'un nouvel uilisateurs
	public function inscriptionUser()
	{

		//Nous établissons les règles avant de lancer la validation de formulaire
		$this->form_validation->set_rules('nom', 'nom', 'required');
		$this->form_validation->set_rules('prenom', 'prénom', 'required');
		$this->form_validation->set_rules('mail', 'email', 'required|is_unique[ttp_utilisateurs.utilisateurs_mail]', array('is_unique' => 'Cette adresse mail existe déjà'));
		$this->form_validation->set_rules('password', 'mot de passe', 'required');

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
		$this->form_validation->set_rules('mail', 'email', 'required');
		$this->form_validation->set_rules('password', 'mot de passe',  'required');

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


}

