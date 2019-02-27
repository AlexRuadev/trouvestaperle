<?php
/**
 * Created by PhpStorm.
 * User: Alexrua
 * Date: 2/26/2019
 * Time: 7:42 PM
 */

class Contact extends CI_Controller
{
    public function viewContact()
    {
        $this->load->view('template/header.php');
        $this->load->view('contact.php');
        $this->load->view('template/footer.php');

    }

}
