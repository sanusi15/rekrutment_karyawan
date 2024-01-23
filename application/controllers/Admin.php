<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('userlogin')) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['count_pelamar'] = $this->db->get('pelamar')->num_rows();
		$data['count_pelamar_waiting'] = $this->db->get_where('pelamar', ['status_lamaran' => 'Proses Seleksi'])->num_rows();
		// $data['count_pelamar_diterima'] = $this->db->get_where('pelamar', ['status_lamaran' => 'Diterima'])->num_rows();
		// $data['count_pelamar_gagal'] = $this->db->get_where('pelamar', ['status_lamaran' => 'Gagal'])->num_rows();
		$data['count_loker'] = $this->db->get('loker')->num_rows();
		$data['count_soal'] = $this->db->get('soal')->num_rows();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');
	}

	public function loker()
	{
		$data['title'] = 'Lowongan Kerja';
		$data['loker'] = $this->db->get('loker')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/loker/index');
		$this->load->view('template/footer');
	}

	public function addloker()
	{
		$data['title'] = 'Tambah Lowongan Kerja';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/loker/add');
		$this->load->view('template/footer');
	}

	public function svloker()
	{
		$posisi = $this->input->post('posisi');
		$jabatan = $this->input->post('jabatan');
		$pendidikan = $this->input->post('pendidikan');
		$gaji = $this->input->post('gaji');
		$persyaratan = $this->input->post('persyaratan');

		$file_name = str_replace('.', '', 'loker');
		$config['upload_path']          = './assets/img/loker';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['file_name']            = $file_name;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('img')) {
			echo 'img kosong';
		} else {
			$data = $this->upload->data();
			$in = [
				'posisi' => $posisi,
				'jabatan' => $jabatan,
				'minimum_pendidikan' => $pendidikan,
				'persyaratan' => $persyaratan,
				'gaji' => $gaji,
				'status' => 'aktif',
				'img' => $data['file_name'],
			];
			$insert = $this->db->insert('loker', $in);
			if ($insert) {
				$this->session->set_flashdata('msg', 'Tambah data berhasil');
				redirect('admin/loker');
			}
		}
	}

	public function editloker($id)
	{
		$data['title'] = 'Detail Lowongan Kerja';
		$data['loker'] = $this->db->get_where('loker', ['id_loker' => $id])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/loker/edit', $data);
		$this->load->view('template/footer');
	}

	public function updloker()
	{
		$posisi = $this->input->post('posisi');
		$jabatan = $this->input->post('jabatan');
		$pendidikan = $this->input->post('pendidikan');
		$gaji = $this->input->post('gaji');
		$persyaratan = $this->input->post('persyaratan');
		$status = $this->input->post('status');

		$file_name = str_replace('.', '', 'loker');
		$config['upload_path']          = './assets/img/loker';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['file_name']            = $file_name;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('img')) {
			$in = [
				'posisi' => $posisi,
				'jabatan' => $jabatan,
				'minimum_pendidikan' => $pendidikan,
				'persyaratan' => $persyaratan,
				'gaji' => $gaji,
				'status' => $status,
			];
			$this->db->where('id_loker', $this->input->post('id'));
			$update = $this->db->update('loker', $in);
			if ($update) {
				$this->session->set_flashdata('msg', 'Data berhasil diubah');
				redirect('admin/loker');
			}
		} else {
			$data = $this->upload->data();
			$in = [
				'posisi' => $posisi,
				'jabatan' => $jabatan,
				'minimum_pendidikan' => $pendidikan,
				'persyaratan' => $persyaratan,
				'gaji' => $gaji,
				'status' => $status,
				'img' => $data['file_name'],
			];
			$this->db->where('id_loker', $this->input->post('id'));
			$insert = $this->db->update('loker', $in);
			if ($insert) {
				$this->session->set_flashdata('msg', 'Data berhasil diubah');
				redirect('admin/loker');
			}
		}
	}

	public function pelamar()
	{
		$data['title'] = 'Pilih Lowongan Kerja';
		$data['loker'] = $this->db->get('loker')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/listPelamar/index', $data);
		$this->load->view('template/footer');
	}

	public function listPelamar($id_loker)
	{
		$data['title'] = 'List Pelamar Kerja';
		$this->db->select('*');
		$this->db->from('pelamar t1');
		$this->db->join('loker t2', 't1.id_loker=t2.id_loker');
		$this->db->where('t1.id_loker', $id_loker);
		$this->db->order_by('t1.tgl_lamar', 'DESC');
		$data['list'] = $this->db->get()->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/listPelamar/list', $data);
		$this->load->view('template/footer');
	}

	public function detailPelamar($id)
	{
		$data['title'] = 'Detail Pelamar';
		$data['data'] = $this->getDataPelamarById($id)->row_array();
		$data['data2'] = $this->getRiwyatKerjaPelamarById($id)->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/listPelamar/detail', $data);
		$this->load->view('template/footer');
	}

	public function konfirmasiLamaran($id, $kode)
	{
		$status = ($kode == 1 ? 'Diterima' : 'Gagal');
		$this->db->set('status_lamaran', $status);
		$this->db->where('id_pelamar', $id);
		$this->db->update('pelamar');
		$this->session->set_flashdata('msg', 'Berhasil');
		redirect('admin/detailPelamar/' . $id);
	}

	public function jawabanTes($id)
	{
		$data['title'] = 'Jawaban Tes';
		$this->db->select('*');
		$this->db->from('jawaban_pelamar t1');
		$this->db->join('soal t2', 't1.id_soal=t2.id_soal');
		$this->db->where('t1.id_pelamar', $id);
		$query = $this->db->get()->result_array();
		$data['jawaban'] = $query;
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/listPelamar/jawaban', $data);
		$this->load->view('template/footer');
	}

	public function listSoal()
	{
		$data['title'] = 'Daftar Soal Tes';
		$data['list'] = $this->db->get('soal')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/soal/index', $data);
		$this->load->view('template/footer');
	}

	public function saveSoal()
	{
		$isi = $this->input->post('isi');
		$this->db->insert('soal', ['isi_soal' => $isi]);
		$this->session->set_flashdata('msg', 'Data berhasil disimpan');
		redirect('admin/listSoal');
	}

	public function updateSoal()
	{
		$id = $this->input->post('id');
		$soal = $this->input->post('soal');
		$this->db->set('isi_soal', $soal);
		$this->db->where('id_soal', $id);
		$this->db->update('soal');
		echo 'berhasil';
	}

	public function hapusSoal()
	{
		$id = $this->input->post('id');
		$this->db->where('id_soal', $id);
		$this->db->delete('soal');
		echo 'berhasil';
	}

	public function report()
	{
		$data['title'] = 'Laporan';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/report/index', $data);
		$this->load->view('template/footer');
	}

	public function createReport()
	{
		if (!$this->input->post()) {
			var_dump('tidak ada data');
			die;
		}
		$tglMulai = $this->input->post('date1');
		$tglSelesai = $this->input->post('date2');
		$data = $this->AdminModel->get_jumlah_pelamar($tglMulai, $tglSelesai)->result_array();

		$this->load->library('pdfgenerator');

		$this->data['daftar'] = $data;
		$this->data['date1'] = $tglMulai;
		$this->data['date2'] = $tglSelesai;


		$this->data['title_pdf'] = 'Laporan Lamaran Pekerjaan PT. Multi Talent Universal';
		$file_pdf = 'LaporanLamaranKerja';
		$paper = 'A4';
		$orientation = "portrait";
		$html = $this->load->view('admin/report/print', $this->data, true);
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	private function getDataPelamarById($id)
	{
		$this->db->select('*');
		$this->db->from('pelamar t1');
		$this->db->join('loker t2', 't1.id_loker=t2.id_loker');
		$this->db->where('t1.id_pelamar', $id);
		return $this->db->get();
	}
	private function getRiwyatKerjaPelamarById($id)
	{
		$this->db->select('*');
		$this->db->from('pelamar t1');
		$this->db->join('riwayatkerja_pelamar t2', 't1.id_pelamar=t2.id_pelamar');
		$this->db->where('t1.id_pelamar', $id);
		return $this->db->get();
	}

	public function logout()
	{
		$this->session->unset_userdata('userlogin');
		redirect('login');
	}
}
