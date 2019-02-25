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
    }

    //Controller du formulaires d'inscription
    public function create()
    {

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

            $this->load->view('template/header.php');
            $this->load->view('welcome_message.php');
            $this->load->view('template/footer.php');

        } else {
            $hash = password_hash($this->input->post("motdepasse"), PASSWORD_DEFAULT);
            $token = generateRandomString();

            $this->UtilisateursModel->inscription($hash, $token);
            $this->load->view('success');
        }
    }

    //Controller du formulaire de connexion
    public function login()
    {

        $data = new stdClass();

        $mail = $this->input->post('mail');
        $motdepasse = $this->input->post('motdepasse');

        $user = $this->UtilisateursModel->test_mail($mail);


        $this->form_validation->set_rules('mail', 'mail', 'required');
        $this->form_validation->set_rules('motdepasse', 'motdepasse',  'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('login');

        } else {

            if (isset($user[0]['utilisateurs_mail'])) {

                if (password_verify($motdepasse, $user[0]['utilisateurs_motdepasse'])) {

                    $newdata = array(
                        'utilisateurs_id' => $user[0]['utilisateurs_id'],
                        'utilisateurs_nom' => $user[0]['utilisateurs_nom'],
                        'utilisateurs_mail' => $user[0]['utilisateurs_mail'],
                        'logged_in' => true
                    );
                    $this->session->set_userdata($newdata);
                    $this->load->view('success');

                } else {

                    $data->error = 'Email ou mot de passe invalide.';
                    $this->load->view('login', $data);
                }
            } else{
                $data->error = 'Email ou mot de passe invalide.';
                $this->load->view('login', $data);
            }
        }
    }

    //Deconnexion
    public function deco(){

        $this->session->sess_destroy();
        $this->load->view('login');
    }


}

