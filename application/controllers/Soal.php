<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$pelamar = $this->session->userdata('id_pelamar');
		// if (!$pelamar) {
		// 	redirect('/');
		// }
	}
	public function index()
	{
		$data['id_pelamar'] = $this->session->userdata('id_pelamar');
		$data['soal'] = $this->db->get('soal')->result_array();
		$data['pg'] = $this->db->get('pg')->result_array();
		$this->load->view('template2/header');
		$this->load->view('soal/pg', $data);
		$this->load->view('template2/footer');
	}

	public function submitPG()
	{
		$jawaban_pg = $this->input->post('jawaban_pg');
		$id_pelamar = $this->session->userdata('id_pelamar');
		$this->simpan_jawaban_pg($id_pelamar, $jawaban_pg);
		$this->session->set_flashdata('message', 'Jawaban berhasil disimpan');
		redirect('soal/soallanjut');
	}

	public function soallanjut()
	{
		$data['id_pelamar'] = $this->session->userdata('id_pelamar');
		$data['soal'] = $this->db->get('soal')->result_array();
		$data['pg'] = $this->db->get('pg')->result_array();
		$this->load->view('template2/header');
		$this->load->view('soal/index', $data);
		$this->load->view('template2/footer');
	}

	public function submit()
	{
		$id_soal = $this->input->post('id_soal');

		for ($i = 0; $i < count($id_soal); $i++) {
			$data = array(
				'id_pelamar' => $this->session->userdata('id_pelamar'),
				'id_soal' => $id_soal[$i],
				'isi_jawaban' => $this->input->post('pg' . $id_soal[$i]),
				'isi_keterangan' => $this->input->post('essay')[$i]
			);
			$this->db->insert('jawaban_pelamar', $data);
		}
		$this->session->unset_userdata('id_pelamar');
		$this->session->set_flashdata('msg', 'Untuk mengetahui hasil dari tes anda silahkan login menggunakan username dan password yang telah dibuat.');
		redirect('/');
	}


	private function simpan_jawaban_pg($id_pelamar, $jawaban_pg)
	{
		// Loop untuk menyimpan setiap jawaban PG ke dalam database
		foreach ($jawaban_pg as $id_pg => $jawaban) {
			// Data yang akan diinsert
			$data = array(
				'id_pelamar' => $id_pelamar,
				'id_pg' => $id_pg,
				'jawaban_pg' => $jawaban
			);

			// Insert data ke dalam database menggunakan model
			$this->db->insert('jawabanpg_pelamar', $data);
		}
	}
}
