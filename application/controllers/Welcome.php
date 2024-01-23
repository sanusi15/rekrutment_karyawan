<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->session->unset_userdata('id_loker');
		$data['loker'] = $this->db->get('loker')->result_array();
		$this->load->view('template2/header');
		$this->load->view('welcome_message',$data);
		$this->load->view('template2/footer');
	}
	
	public function loker()
	{
		$this->load->view('template2/header');
		$this->load->view('loker');
		$this->load->view('template2/footer');
	}
	public function detailloker($id)
	{
		$data['detail'] = $this->db->get_where('loker', ['id_loker' => $id])->row_array();
		$this->load->view('template2/header');
		$this->load->view('detailloker', $data);
		$this->load->view('template2/footer');
	}
}
