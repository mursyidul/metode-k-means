<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah_asal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_daerah_asal');
	}

	public function index(){
		$daerah_asal['daerah_asal'] = $this->Model_daerah_asal->lihat_daerah_asal();
		$this->load->view('daerah/daerah_asal', $daerah_asal);
	}

	public function tambah(){
		$this->load->view('daerah/tambah-daerah_asal');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nama_kota = $this->input->post('nama_kota');

			$simpan = array(
				'kota_asal' => $nama_kota
				
				);

			$simpan_proses = $this->Model_daerah_asal->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Daerah Asal Berhasil !!!</div>");
			redirect('daerah_asal');
			
		}
	}

	public function edit($id){
		$Daerah_asal['Daerah_asal'] = $this->Model_daerah_asal->edit($id);
		$this->load->view('Daerah/edit-Daerah_asal', $Daerah_asal);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$nama_kota = $this->input->post('nama_kota');
			//$gaji = $this->input->post('gaji');

			$simpan = array(
				'kota_asal' => $nama_kota
				);

			$edit_proses = $this->Model_daerah_asal->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Daerah Asal Berhasil !!!</div>");
			redirect('daerah_asal');
			
		}
	}

	public function hapus($id){
		$this->Model_daerah_asal->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Daerah Asal Berhasil !!!</div>");
		redirect('daerah_asal');
	}

}
