<?php
/**
 * Created by PhpStorm.
 * User: shadownluffy
 * Date: 04/03/19
 * Time: 08:03
 */

class MailController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');

	}

	public function contact()
	{

		//Définition des règles
		$this->form_validation->set_rules('name', 'Nom', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('subject', 'Objet', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		//Soumission des formulaires
		if ($this->form_validation->run() === false){
			$this->load->view('template/header.php');
			$this->load->view('welcome_message');
			$this->load->view('template/footer.php');
		}else {


            //On récupère les inputs du formulaire
            $data_form = $this->input->post(NULL, TRUE);

            //On définit des variables pour les inputs
            $nom = $data_form['name'];
            $email = $data_form['email'];
            $objet = $data_form['subject'];
            $message = $data_form['message'];
			//Configuration des paramètres pour la librairies email
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'trouvestaperle@gmail.com',
				'smtp_pass' => 'Trouvestaperle2',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1'
			);

			//On charge la librairie email avec les configs au dessus
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			//On définit les destinataires et les émetteurs
			$this->email->from('trouvestaperle@gmail.com', $nom);
			$this->email->reply_to($email, $nom);
			$this->email->bcc($email);
			$this->email->to('trouvestaperle@gmail.com');

			$this->email->subject($objet);
			$this->email->message($message);

			$this->email->send();

            $data['alertsucces'] =
                '
					<div class="alert alert-success" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Bravo!</strong> Votre message à bien été envoyée!
					</div>
					<script >
					window.setTimeout(function() {
						$(".alert").fadeTo(500, 0).slideUp(500, function(){
							$(this).remove(); 
						});
					}, 4000);
					</script>
		
				';


            $this->load->view('template/header.php');
            $this->load->view('welcome_message', $data);
            $this->load->view('template/footer.php');

        }

	}


}
