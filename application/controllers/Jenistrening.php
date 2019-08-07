<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenistrening extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_jenistrening');
	}

	public function index(){
		$jenistrening['jenistrening'] = $this->Model_jenistrening->lihat_jenistrening();
		$this->load->view('jenistrening', $jenistrening);
	}

	public function tambah(){
		$this->load->view('tambah-jenistrening');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nama_jenistrening = $this->input->post('nama_jenistrening');
			//$gaji = $this->input->post('gaji');

			$simpan = array(
				'jenistrening' => $nama_jenistrening
				//,
				//'gaji' => $gaji
				);

			$simpan_proses = $this->Model_jenistrening->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Jenis Trening Berhasil !!!</div>");
			redirect('jenistrening');
			
		}
	}

	public function edit($id){
		$jenistrening['jenistrening'] = $this->Model_jenistrening->edit($id);
		$this->load->view('edit-jenistrening', $jenistrening);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$nama_jenistrening = $this->input->post('nama_jenistrening');
			//$gaji = $this->input->post('gaji');

			$simpan = array(
				'jenistrening' => $nama_jenistrening
				//,
				//'gaji' => $gaji
				);

			$edit_proses = $this->Model_jenistrening->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Jenis Trening Berhasil !!!</div>");
			redirect('jenistrening');
			
		}
	}

	public function hapus($id){
		$this->Model_jenistrening->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Jenis Trening Berhasil !!!</div>");
		redirect('jenistrening');
	}

}
