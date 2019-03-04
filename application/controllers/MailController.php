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
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'trouvestaperle@gmail.com',
			'smtp_pass' => 'Trouvestaperle2',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('trouvestaperle@gmail.com', 'Alexandre');
		$this->email->reply_to('theluffy@hotmail.fr', 'Alexandre');
		$this->email->bcc('theluffy@hotmail.fr');
		$this->email->to('trouvestaperle@gmail.com');

		$this->email->subject('Test');
		$this->email->message('Test');

		$this->email->send();

	}


}
