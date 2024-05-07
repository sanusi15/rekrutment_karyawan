<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('datauser')) {
			redirect('admin');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['jumlah_daftar'] = $this->AdminModel->get_jumlah_pendaftar();
		$data['jumlah_lulus'] = $this->AdminModel->get_jumlah_lulus();
		$data['jumlah_gagal'] = $this->AdminModel->get_jumlah_gagal();

		$this->load->view('templates/dashboard_header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/index', $data);
		$this->load->view('templates/footer');
	}

	public function profil()
	{
		$data['title'] = 'Profil';
		$data['user'] = $this->db->get('user')->row_array();

		$this->load->view('templates/dashboard_header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/profil', $data);
		$this->load->view('templates/footer');
	}
	public function error()
	{

		$this->load->view('templates/error');
	}
}
