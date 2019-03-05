<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/03/2019
 * Time: 14:53
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmcv{

    public function confirmationcv()
    {

        //Configuration des protocoles pour l'envoi
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'trouvestaperle@gmail.com',
            'smtp_pass' => 'Trouvestaperle2',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );

        //On configure une instance générale CodeIgniter car le this ne fonctionnera pas
        $ci =& get_instance();
        //On charge la librairie email avec les configs au dessus
        $ci->load->library('email', $config);
        $ci->email->set_newline("\r\n");

        //On définit les destinataires et les émetteurs
        $ci->email->from('trouvestaperle@gmail.com');
        $ci->email->bcc($_SESSION['utilisateurs_mail']);
        $ci->email->to('trouvestaperle@gmail.com');

        $ci->email->subject('Confirmation CV');
        $ci->email->message(utf8_decode('Votre CV a bien été enregistré sur notre site!'));

        $ci->email->send();


    }
}