<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('email')){
			redirect('admin');
		}
	}	
    public function index()
	{
		$this->load->model('AuthModel');
        $data['title'] = 'Pendaftar';
		$data['karyawan'] = $this->AuthModel->get_data_hasil();
		$this->load->view('templates/dashboard_header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('karyawan/index', $data);
		$this->load->view('templates/footer');
	}

	public function kirim($id)
	{
		$a = $this->db->get_where('karyawan', ['id_karyawan' => $id])->row_array();
		$nama = $a['nama_karyawan'];
		
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'websan1512@gmail.com',//alamat email gmail
			'smtp_pass' => '15desember',//password email 
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);
		// $message = "Hallo $nama <br>    I Love You <br> Tetap Jaga Kesehatan ya :) <br> I will always wait for you until you are mine >_< ";
		$message = "<h1>PT.Yuk Kerja</h1> <br> <p>Selamat siang kami dari Pt.Yuk Kerja memberitahukan bahwa anda <b>$nama</b> <i>lulus</i> dari tahap sebelumnya dan mengundang anda untuk ke tahap selanjutnya yaitu Interview pada :  </P> <br> Hari / Tanggal : Minggu, 20-Juni-2021 <br> Pukul : 09.00 WIB <br> Alamat : Jl.Raya Serang-Cilegon km.12 <br><br> *Apabila anda tidak hadir pada waktu yang tertera di atas maka anda kami anggap gagal. <br>
		<p>Terimakasih</p> "  ;
		
		
		$email = $a['email'];//email penerima
	
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from($config['smtp_user']);
		$this->email->to($email);
		$this->email->subject('Undangan Tes Interview');//subjek email
		$this->email->message($message);
        $this->email->send();

		$this->session->set_flashdata('message', 'Email berhasil dikirim');
		redirect('karyawan');
		
	}

	public function profil($id)
	{
		$data['profil'] = $karyawan =$this->db->get_where('karyawan', ['id_karyawan' => $id])->row_array();
		$data['title'] = 'Proil Pendaftar';
		
		$this->load->view('templates/dashboard_header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('karyawan/profil', $data);
		$this->load->view('templates/footer');
		
	}
}
