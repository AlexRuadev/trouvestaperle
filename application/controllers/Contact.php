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
        $this->load->library('email');
    }

    public function email()
    {
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);


        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

        if($this->email->send())
        {

            echo "Your email was sent.!";
        } else {
            show_error($this->email->print_debugger());
        }
        $this->load->view('template/header');
        $this->load->view('welcome_message');
        $this->load->view('template/footer');



    }



}

