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
        $this->load->database();
        $this->load->model("UtilisateursModel");
    }

    public function create()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('date');
        $this->db->set('utilisateurs_created_at ', 'NOW()', false);

        $this->form_validation->set_rules('nom', 'nom', 'required');
        $this->form_validation->set_rules('prenom', 'prenom', 'required');
        $this->form_validation->set_rules('mail', 'mail', 'required');
        $this->form_validation->set_rules('motdepasse', 'motdepasse', 'required');

        function generateRandomString($length = 10)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('inscription');

        } else {
            $hash = password_hash($this->input->post("motdepasse"), PASSWORD_DEFAULT);
            $token = generateRandomString();

            $this->UtilisateursModel->inscription($hash, $token);
            $this->load->view('success');
        }
    }


    public function login()
    {

        $this->load->helper('form');
        print_r($_SESSION);

        if (isset($_POST['submitted'])) {

            $this->form_validation->set_rules('mail', 'mail', 'required');
            $this->form_validation->set_rules('motdepasse', 'motdepasse', 'required');


            if ($this->form_validation->run() === FALSE) {

                $this->load->view('login');



            } else {


                $mail = $this->input->post('mail');
                $motdepasse = $this->input->post('motdepasse');

                $user = $this->UtilisateursModel->test_mail($mail);

                if (isset($user)) {
                    if (password_verify($motdepasse, $user[0]['utilisateurs_motdepasse'])) {


                        $newdata = array(
                           'utilisateurs_nom' => $user[0]['utilisateurs_nom'],
                           'utilisateurs_mail' => $user[0]['utilisateurs_mail'],
                           'logged_in' => true
                       );

                       $this->session->set_userdata($newdata);

        print_r($_SESSION);

                    } else {



                        $this->form_validation->set_message('rule', 'mauvais mot de passe');

                    }
                }
                $this->load->view('success');
            }



        }else{
            $this->load->view('login');
        }

    }

    public function deco(){

        $this->session->sess_destroy();
        $this->load->view('login');
    }
}

