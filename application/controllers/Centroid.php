<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centroid extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_centroid');
	}

	public function index(){
		$centroid['centroid'] = $this->Model_centroid->lihat_centroid();
		$this->load->view('centroid/centroid_awal', $centroid);
	}

	public function tambah(){
		$this->load->view('centroid/tambah-centroid_awal');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nama = $this->input->post('nama');
			$centroid = $this->input->post('centroid');
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
				'nama' => $nama,
				'centroid' => $centroid,
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

			$simpan_proses = $this->Model_centroid->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Centroid Berhasil !!!</div>");
			redirect('centroid');
			
		}
	}

	public function edit($id){
		$centroid['centroid'] = $this->Model_centroid->edit($id);
		$this->load->view('centroid/edit-centroid', $centroid);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$nama = $this->input->post('nama');
			$centroid = $this->input->post('centroid');
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
				'nama' => $nama,
				'centroid' => $centroid,
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
			redirect('centroid');
			
		}
	}

	public function hapus($id){
		$this->Model_centroid->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Centroid Berhasil !!!</div>");
		redirect('centroid');
	}

}
