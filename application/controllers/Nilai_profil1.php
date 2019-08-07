<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_profil1 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_kmeans');
		$this->load->model('Model_centroid');
	}

	public function index(){
		$nilai_profil['nilai_profil'] = $this->Model_kmeans->selectdata('nilai_profil_mahasiswa');
		$nilai_profil['centroid_baru'] = $this->Model_kmeans->get_centroid();
		$nilai_profil['centroid1'] = $this->Model_centroid->lihat_centroid();
		$nilai_profil['centroid2'] = $this->Model_centroid->lihat_centroid2();
		$nilai_profil['centroid3'] = $this->Model_centroid->lihat_centroid3();
		$nilai_profil['centroid4'] = $this->Model_centroid->lihat_centroid4();
		$nilai_profil['centroid5'] = $this->Model_centroid->lihat_centroid5();
		$nilaiprofil['centroid11'] = $this->db->get('centroid1');
		

		//$nilai_profil = $this->Model_kmeans->selectdata('nilai_profil');
		$this->load->view('nilaiprofil/profil2',$nilai_profil);
		
	}

	function centroid_baru(){

		
	}

	public function edit($id){
		$centroid['centroid1'] = $this->Model_centroid->edit($id);
		$this->load->view('centroid/edit-centroid1', $centroid);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$jurusan = $this->input->post('jurusan');
			$jenis = $this->input->post('jenis');
			$usia = $this->input->post('usia');
			$penghasilan = $this->input->post('penghasilan');
			$sekolah = $this->input->post('sekolah');
			$daerah = $this->input->post('daerah');
			$kelas = $this->input->post('kelas');
			$status = $this->input->post('status');
			$pekerjaan = $this->input->post('pekerjaan');

			$simpan = array(
				'jurusan' => $jurusan,
				'jenis' => $jenis,
				'usia' => $usia,
				'penghasilan' => $penghasilan,
				'sekolah' => $sekolah,
				'daerah' => $daerah,
				'kelas' => $kelas,
				'status' => $status,
				'pekerjaan' => $pekerjaan
				);

			$edit_proses = $this->Model_centroid->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Centroid Berhasil !!!</div>");
			redirect('nilai_profil1');
			
		}
	}

	public function edit2($id){
		$centroid['centroid2'] = $this->Model_centroid->edit2($id);
		$this->load->view('centroid/edit-centroid2', $centroid);
	}

	public function edit_proses2($id){
		if($this->input->post('simpan')){
			$jurusan = $this->input->post('jurusan');
			$jenis = $this->input->post('jenis');
			$usia = $this->input->post('usia');
			$penghasilan = $this->input->post('penghasilan');
			$sekolah = $this->input->post('sekolah');
			$daerah = $this->input->post('daerah');
			$kelas = $this->input->post('kelas');
			$status = $this->input->post('status');
			$pekerjaan = $this->input->post('pekerjaan');

			$simpan = array(
				'jurusan' => $jurusan,
				'jenis' => $jenis,
				'usia' => $usia,
				'penghasilan' => $penghasilan,
				'sekolah' => $sekolah,
				'daerah' => $daerah,
				'kelas' => $kelas,
				'status' => $status,
				'pekerjaan' => $pekerjaan
				);

			$edit_proses = $this->Model_centroid->edit_proses2($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Centroid Berhasil !!!</div>");
			redirect('nilai_profil1');
			
		}
	}


	public function edit3($id){
		$centroid['centroid3'] = $this->Model_centroid->edit3($id);
		$this->load->view('centroid/edit-centroid3', $centroid);
	}

	public function edit_proses3($id){
		if($this->input->post('simpan')){
			$jurusan = $this->input->post('jurusan');
			$jenis = $this->input->post('jenis');
			$usia = $this->input->post('usia');
			$penghasilan = $this->input->post('penghasilan');
			$sekolah = $this->input->post('sekolah');
			$daerah = $this->input->post('daerah');
			$kelas = $this->input->post('kelas');
			$status = $this->input->post('status');
			$pekerjaan = $this->input->post('pekerjaan');

			$simpan = array(
				'jurusan' => $jurusan,
				'jenis' => $jenis,
				'usia' => $usia,
				'penghasilan' => $penghasilan,
				'sekolah' => $sekolah,
				'daerah' => $daerah,
				'kelas' => $kelas,
				'status' => $status,
				'pekerjaan' => $pekerjaan
				);

			$edit_proses = $this->Model_centroid->edit_proses3($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Centroid Berhasil !!!</div>");
			redirect('nilai_profil1');
			
		}
	}


	public function edit4($id){
		$centroid['centroid4'] = $this->Model_centroid->edit4($id);
		$this->load->view('centroid/edit-centroid4', $centroid);
	}

	public function edit_proses4($id){
		if($this->input->post('simpan')){
			$jurusan = $this->input->post('jurusan');
			$jenis = $this->input->post('jenis');
			$usia = $this->input->post('usia');
			$penghasilan = $this->input->post('penghasilan');
			$sekolah = $this->input->post('sekolah');
			$daerah = $this->input->post('daerah');
			$kelas = $this->input->post('kelas');
			$status = $this->input->post('status');
			$pekerjaan = $this->input->post('pekerjaan');

			$simpan = array(
				'jurusan' => $jurusan,
				'jenis' => $jenis,
				'usia' => $usia,
				'penghasilan' => $penghasilan,
				'sekolah' => $sekolah,
				'daerah' => $daerah,
				'kelas' => $kelas,
				'status' => $status,
				'pekerjaan' => $pekerjaan
				);

			$edit_proses = $this->Model_centroid->edit_proses4($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Centroid Berhasil !!!</div>");
			redirect('nilai_profil1');
			
		}
	}

	public function edit5($id){
		$centroid['centroid5'] = $this->Model_centroid->edit5($id);
		$this->load->view('centroid/edit-centroid5', $centroid);
	}

	public function edit_proses5($id){
		if($this->input->post('simpan')){
			$jurusan = $this->input->post('jurusan');
			$jenis = $this->input->post('jenis');
			$usia = $this->input->post('usia');
			$penghasilan = $this->input->post('penghasilan');
			$sekolah = $this->input->post('sekolah');
			$daerah = $this->input->post('daerah');
			$kelas = $this->input->post('kelas');
			$status = $this->input->post('status');
			$pekerjaan = $this->input->post('pekerjaan');

			$simpan = array(
				'jurusan' => $jurusan,
				'jenis' => $jenis,
				'usia' => $usia,
				'penghasilan' => $penghasilan,
				'sekolah' => $sekolah,
				'daerah' => $daerah,
				'kelas' => $kelas,
				'status' => $status,
				'pekerjaan' => $pekerjaan
				);

			$edit_proses = $this->Model_centroid->edit_proses5($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Centroid Berhasil !!!</div>");
			redirect('nilai_profil1');
			
		}
	}


}
