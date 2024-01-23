<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {	
    public function index()
	{
        $data['title'] = 'Registrasi';
		$idloker = $this->input->post('id');
		$this->session->set_userdata('id_loker',$idloker);
		$this->load->view('template2/header', $data);		
		$this->load->view('registrasi/index');
		$this->load->view('template2/footer');
	}

	public function tambah()
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_ktp = $this->input->post('no_ktp');
		$email = $this->input->post('email');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$gender = $this->input->post('gender');
		$no_hp = $this->input->post('no_hp');
		$status_kawin = $this->input->post('status_kawin');
		$agama = $this->input->post('agama');
		$kewarganegaraan = $this->input->post('kewarganegaraan');
		$no_npwp = $this->input->post('no_npwp');
		$alamat_asli = $this->input->post('alamat_asli');
		$alamat_domisili = $this->input->post('alamat_domisili');
		$cv = $this->input->post('cv');
		$foto = $this->input->post('foto');


		
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Lengkap harus diisi',
		]);

		$this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required', [
			'required' => 'Nomor KTP harus diisi',
		]);

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
			'required' => 'Email harus diisi',
			'valid_email' => 'Format email tidak valid',
		]);

		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
			'required' => 'Tempat Lahir harus diisi',
		]);

		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
			'required' => 'Tanggal Lahir harus diisi',
		]);

		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin harus diisi',
		]);

		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required', [
			'required' => 'Nomor HP harus diisi',
		]);

		$this->form_validation->set_rules('status_kawin', 'Status Kawin', 'required', [
			'required' => 'Status Kawin harus diisi',
		]);

		$this->form_validation->set_rules('agama', 'Agama', 'required', [
			'required' => 'Agama harus diisi',
		]);

		$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', [
			'required' => 'Kewarganegaraan harus diisi',
		]);

		$this->form_validation->set_rules('alamat_asli', 'Alamat Asli', 'required', [
			'required' => 'Alamat Asli harus diisi',
		]);

		$this->form_validation->set_rules('alamat_domisili', 'Alamat Domisili', 'required', [
			'required' => 'Alamat Domisili harus diisi',
		]);
		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required' => 'Username harus diisi',
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password harus diisi',
		]);
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]', [
			'required' => 'Konfirmasi Password harus diisi',
			'matches' => 'Konfirmasi Password tidak sesuai dengan Password',
		]);



		if ($this->form_validation->run() == false) {
			$errors = array(
				'nama_lengkap' => form_error('nama_lengkap'),
				'no_ktp' => form_error('no_ktp'),
				'email' => form_error('email'),
				'tempat_lahir' => form_error('tempat_lahir'),
				'tgl_lahir' => form_error('tgl_lahir'),
				'gender' => form_error('gender'),
				'no_hp' => form_error('no_hp'),
				'status_kawin' => form_error('status_kawin'),
				'agama' => form_error('agama'),
				'kewarganegaraan' => form_error('kewarganegaraan'),
				'alamat_asli' => form_error('alamat_asli'),
				'alamat_domisili' => form_error('alamat_domisili'),
			);
			$response = [
				"status" => 'error',
				"errors" => $errors
			];
			echo json_encode($response);
		} else {
			$tblpelamar = $this->db->get('pelamar');
			if ($tblpelamar->num_rows() >= 1) {
				$this->db->order_by('id_pelamar', 'DESC');
				$this->db->limit(1);
				$lastData = $this->db->get('pelamar')->row_array();
				$lastId = $lastData['id_pelamar'];
				$numericPart = intval(substr($lastId, 2)) + 1;
				$newIdPelamar = 'PL' . str_pad($numericPart, 3, '0', STR_PAD_LEFT);
				// Check if the generated ID already exists
				while ($this->isIdPelamarExists($newIdPelamar)) {
					$numericPart++;
					$newIdPelamar = 'PL' . str_pad($numericPart, 3, '0', STR_PAD_LEFT);
				}
			}else{
				$newIdPelamar = 'PL001';
			}
			$file_name = str_replace('.', '', 'CV_');
			$config['upload_path']          = './assets/img/cv';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['file_name']            = $file_name . $newIdPelamar;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('cv')) {
				echo 'cv kosong';
			}
			$data1 = $this->upload->data();
			$file_name2 = str_replace('.', '', 'foto_');
			$config2['upload_path']          = './assets/img/foto';
			$config2['allowed_types']        = 'jpeg|jpg|png';
			$config2['file_name']            = $file_name2 . $newIdPelamar;
			$this->upload->initialize($config2);
			if (!$this->upload->do_upload('foto')) {
				echo 'foto kosong';
			}
			$data2 = $this->upload->data();
			$dataPelamar = [
				'id_pelamar' => $newIdPelamar,
				'nama_lengkap' => $nama_lengkap,
				'no_ktp' => $no_ktp,
				'email' => $email,
				'tempat_lahir' => $tempat_lahir,
				'tgl_lahir' => $tgl_lahir,
				'gender' => $gender,
				'no_hp' => $no_hp,
				'status_kawin' => $status_kawin,
				'kewarganegaraan' => $kewarganegaraan,
				'agama' => $agama,
				'no_npwp' => $no_npwp,
				'alamat_asli' => $alamat_asli,
				'alamat_domisili' => $alamat_domisili,
				'cv' => $data1['file_name'],
				'foto' => $data2['file_name'],
				'id_loker' => $this->session->userdata('id_loker'),
				'status_lamaran' => 'Proses Seleksi'
			];
			$dataAkun = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'id_pelamar' => $newIdPelamar,
				'level' => 3,
			];
			$insert1 = $this->db->insert('pelamar', $dataPelamar);
			$insert2 = $this->db->insert('users', $dataAkun);
			if ($insert1 && $insert2) {				
				$nama_perusahaan = $this->input->post('nama_perusahaan[]');
				$posisi          = $this->input->post('posisi[]');
				$lama_kerja      = $this->input->post('lama_kerja[]');
				$alasan_berhenti = $this->input->post('alasan_berhenti[]');
				for ($i = 0; $i < count($nama_perusahaan); $i++) {
					if($nama_perusahaan[$i] == null){
						continue;
					}else{
						$dataRiwayatKerja = array(
							'id_pelamar'       => $newIdPelamar,
							'nama_perusahaan'  => $nama_perusahaan[$i],
							'posisi'           => $posisi[$i],
							'lama_kerja'       => $lama_kerja[$i],
							'alasan_berhenti'  => $alasan_berhenti[$i]
						);
						$this->db->insert('riwayatkerja_pelamar', $dataRiwayatKerja);
					}
				}
			}
			$this->session->unset_userdata('id_loker');
			$this->session->set_userdata('id_pelamar', $newIdPelamar);
			$response = ["status" => "success"];
			echo json_encode($response);
		}
	}

	private function isIdPelamarExists($idPelamar)
	{
		$this->db->where('id_pelamar', $idPelamar);
		$query = $this->db->get('pelamar');
		return $query->num_rows() > 0;
	}



}
