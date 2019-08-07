<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_jurusan');
	}

	public function index(){
		$jurusan['jurusan_sekolah'] = $this->Model_jurusan->lihat_jurusan();
		$this->load->view('jurusan/jurusan1', $jurusan);
	}

	public function tambah(){
		$this->load->view('jurusan/tambah-jurusan');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nama_jurusan = $this->input->post('nama_jurusan');

			$simpan = array(
				'jurusan_sekolah' => $nama_jurusan
				
				);

			$simpan_proses = $this->Model_jurusan->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Jurusan Sekolah Berhasil !!!</div>");
			redirect('jurusan');
			
		}
	}

	public function edit($id){
		$jurusan['jurusan_sekolah'] = $this->Model_jurusan->edit($id);
		$this->load->view('jurusan/edit-jurusan', $jurusan);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$nama_jurusan = $this->input->post('nama_jurusan');
			//$gaji = $this->input->post('gaji');

			$simpan = array(
				'jurusan_sekolah' => $nama_jurusan
				);

			$edit_proses = $this->Model_jurusan->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Jurusan Sekolah Berhasil !!!</div>");
			redirect('jurusan');
			
		}
	}

	public function hapus($id){
		$this->Model_jurusan->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Jurusan Sekolah Berhasil !!!</div>");
		redirect('jurusan');
	}

}
