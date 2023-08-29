<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function index()
    {
        $this->load->view('Auth/login');
    }

    public function register()
    {
        $this->load->view('Auth/register');
    }

    public function registration_from()
    {
        $this->auth_model->register_user();
    }

    public function login_form()
    {
        if (isset($_POST['submit'])) {
            $username = $this->input->POST('email');
            $password = $this->input->POST('password');
            $success = $this->auth_model->login_user($username, $password);
            if ($success == 1) {
                $this->session->get_userdata(array('status' => 'login berhasil'));
                redirect(base_url('Home/index'));
            } else {
                (redirect(base_url('index')));
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login/'));
    }
}
