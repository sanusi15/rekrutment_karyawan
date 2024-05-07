<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->session->unset_userdata('userlogin');
    }
    public function login()
    {
        $this->load->view('login');
    }

    public function sign_in()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->get_where('users', ['username' => $username]);
        if ($query->num_rows() >= 1) {
            $getUser = $query->row_array();
            if ($password == $getUser['password']) {
                $data = [
                    'username' => $getUser['username'],
                    'level' => $getUser['level']
                ];
                $this->session->set_userdata('userlogin', $data);
                if ($getUser['level'] == 3) {
                    redirect('pelamar');
                } else {
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('msg', 'Login gagal');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('msg', 'Login gagal');
            redirect('login');
        }
    }
}
