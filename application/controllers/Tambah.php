<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Tambah Soal';

		$this->load->view('tambah/index');
	}

	public function create()
	{
		$data = [
			'soal' => $this->input->post('soal'),
			'a' => $this->input->post('a'),
			'b' => $this->input->post('b'),
			'c' => $this->input->post('c'),
			'd' => $this->input->post('d'),
			'kunci' => $this->input->post('kunci')
		];

		$this->db->insert('soal', $data);
		redirect('soal');
	}
}
