<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Potongan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_potongan');
	}

	public function index(){
		$bagian['potongan'] = $this->Model_potongan->lihat_bagian();
		$this->load->view('potongan', $bagian);
	}

	public function tambah(){
		$this->load->view('tambah-bagian');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nama_bagian = $this->input->post('nama_bagian');
			$gaji = $this->input->post('gaji');

			$simpan = array(
				'bagian' => $nama_bagian,
				'gaji' => $gaji
				);

			$simpan_proses = $this->Model_bagian->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Bagian Berhasil !!!</div>");
			redirect('bagian');
			
		}
	}

	public function edit($id){
		$bagian['potongan'] = $this->Model_potongan->edit($id);
		$this->load->view('edit-potongan', $bagian);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$nama_potongan = $this->input->post('nama_potongan');
			$potongan = $this->input->post('potongan');

			$simpan = array(
				'nama_potongan' => $nama_potongan,
				'potongan' => $potongan
				);

			$edit_proses = $this->Model_potongan->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Potongan Berhasil !!!</div>");
			redirect('potongan');
			
		}
	}

	public function hapus($id){
		$this->Model_bagian->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Bagian Berhasil !!!</div>");
		redirect('bagian');
	}

}
