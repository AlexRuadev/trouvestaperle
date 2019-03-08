<?php
/**
 * Created by PhpStorm.
 * User: shadownluffy
 * Date: 05/03/19
 * Time: 14:09
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Confirmcv{

	public function confirmationcv()
	{
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

		//On défini une instance général de CodeIgniter car le this ne fonctionne pas
		$ci =& get_instance();
		//On charge la librairie email avec les configs au dessus
		$ci->load->library('email', $config);
		$ci->email->set_newline("\r\n");

		//On définit les destinataires et les émetteurs
		$ci->email->from('trouvestaperle@gmail.com');
		$ci->email->bcc($_SESSION['utilisateurs_mail']);
		$ci->email->to('trouvestaperle@gmail.com');

		$ci->email->subject('Confirmation CV');

		//Le contenu de notre message avec le logo qui intègre un lien pour attérir sur le site directement
		$ci->email->message(utf8_decode('Votre CV a bien été enregistré sur notre site! 
										<br><a href="'.base_url().'"><img src="https://image.noelshack.com/fichiers/2019/10/3/1551877701-logo.png" 
										alt="logo" style="width: 96px; height: 96px;"></a>'));

		$ci->email->send();


	}
}
