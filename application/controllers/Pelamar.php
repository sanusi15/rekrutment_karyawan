<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('userlogin')) {
			redirect('login');
		}
	}
		
    public function index()
	{
		$usersession = $this->session->userdata('userlogin');
		$getTblUsers = $this->db->get_where('users', ['username' => $usersession['username']])->row_array();
		$getDataPelamar = $this->db->get_where('pelamar', ['id_pelamar' => $getTblUsers['id_pelamar']])->row_array();
        $data['title'] = 'Dashboard';
		$data['user'] = $getDataPelamar;
		$this->load->view('template2/header', $data);
		// $this->load->view('template2/sidebar');
		$this->load->view('pelamar/index', $data);
		$this->load->view('template2/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('userlogin');
		redirect('/');
	}
}