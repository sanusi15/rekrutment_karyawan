<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$pelamar = $this->session->userdata('id_pelamar');
        if(!$pelamar){
            redirect('/');
        }
    }
	public function index()
	{
		$data['id_pelamar'] = $this->session->userdata('id_pelamar');
		$data['soal'] = $this->db->get('soal')->result_array();
		$this->load->view('template2/header');	
        $this->load->view('soal/index', $data);
        $this->load->view('template2/footer');
	}
	
	public function submit(){
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

	
}


