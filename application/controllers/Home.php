<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $email = htmlspecialchars($this->input->post('email'));
            $password = $this->input->post('password');

            echo "Email anda : " . $email;
            echo "<br>";
            echo "Password anda : " . $password;
        }
    }
}
