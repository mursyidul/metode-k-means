<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puskesmas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_puskesmas');
	}

	public function index(){
		$puskesmas['data_puskesmas'] = $this->Model_puskesmas->lihat_puskesmas();
		$this->load->view('puskesmas12/puskesmas1', $puskesmas);
	}

	public function tambah(){
		$this->load->view('puskesmas12/tambah-puskesmas');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nama_puskesmas = $this->input->post('nama_puskesmas');
			$jumlah_pasien_total = $this->input->post('jumlah_pasien_total');
			$ketersedian_obat_total = $this->input->post('ketersedian_obat_total');
			$jumlah_fasilitas_total = $this->input->post('jumlah_pasien_total');

			$simpan = array(
				'nama_puskesmas' => $nama_puskesmas,
				'jumlah_pasien_total' => $jumlah_pasien_total,
				'ketersedian_obat_total' => $ketersedian_obat_total,
				'jumlah_fasilitas_total' => $jumlah_fasilitas_total
				);

			$simpan_proses = $this->Model_puskesmas->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Puskesmas Berhasil !!!</div>");
			redirect('puskesmas');
			
		}
	}

	public function edit($id){
		$puskesmas['data_puskesmas'] = $this->Model_puskesmas->edit($id);
		$this->load->view('puskesmas12/edit-puskesmas', $puskesmas);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$nama_puskesmas = $this->input->post('nama_puskesmas');
			$jumlah_pasien_total = $this->input->post('jumlah_pasien_total');
			$ketersedian_obat_total = $this->input->post('ketersedian_obat_total');
			$jumlah_fasilitas_total = $this->input->post('jumlah_fasilitas_total');
			//$gaji = $this->input->post('gaji');

			$simpan = array(
				'nama_puskesmas' => $nama_puskesmas,
				'jumlah_pasien_total' => $jumlah_pasien_total,
				'ketersedian_obat_total' => $ketersedian_obat_total,
				'jumlah_fasilitas_total' => $jumlah_fasilitas_total
				);

			$edit_proses = $this->Model_puskesmas->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Puskesmas Berhasil !!!</div>");
			redirect('puskesmas');
			
		}
	}

	public function hapus($id){
		$this->Model_puskesmas->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Puskesmas Berhasil !!!</div>");
		redirect('puskesmas');
	}

}
