<?php
class auth_model extends CI_MODEL
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function register_user()
    {
        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');

        if ($password1 = $password2) {
            $this->session->set_flashdata('worg', 'The password not equal with confirmation!');
            redirect(base_url('register/login'));
        } else {
            $data = array(
                "nama" => $this->input->post('name'),
                "email" => $this->input->post('email'),
                "password" => $password1
            );

            $this->db->insert('user', $data);
            $this->session->set_flashdata('suc', 'You are registered please login');
            redirect('login/index');
        }
    }

    public function login_user($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {

                $fain = [
                    'username' => $row->username,
                    'password' => $row->password,

                ];
            }
            $this->session->get_userdata($fain);
            $this->session->set_flashdata('suc', 'You are roogged');
            redirect(base_url('Home/'));
        } else {
            $this->session->set_flashdata('warning', 'Incorrect Authentication!!!');
            redirect(base_url('login/index'));
        }
    }
}
