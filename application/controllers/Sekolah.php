<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_sekolah');
	}

	public function index(){
		$sekolah['sekolah'] = $this->Model_sekolah->lihat_sekolah();
		$this->load->view('sekolah1/sekolah12', $sekolah);
	}

	public function tambah(){
		$this->load->view('sekolah1/tambah-sekolah');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nama_sekolah = $this->input->post('nama_sekolah');

			$simpan = array(
				'sekolah' => $nama_sekolah
				
				);

			$simpan_proses = $this->Model_sekolah->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Sekolah Berhasil !!!</div>");
			redirect('sekolah');
			
		}
	}

	public function edit($id){
		$sekolah['sekolah'] = $this->Model_sekolah->edit($id);
		$this->load->view('sekolah1/edit-sekolah', $sekolah);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$nama_sekolah = $this->input->post('nama_sekolah');
			//$gaji = $this->input->post('gaji');

			$simpan = array(
				'sekolah' => $nama_sekolah
				);

			$edit_proses = $this->Model_sekolah->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Sekolah Berhasil !!!</div>");
			redirect('sekolah');
			
		}
	}

	public function hapus($id){
		$this->Model_sekolah->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Sekolah Berhasil !!!</div>");
		redirect('sekolah');
	}

}
