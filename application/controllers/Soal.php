<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_soal');
	}

	public function index(){
		$soal['soal'] = $this->Model_soal->lihat_soal();
		$this->load->view('soal', $soal);
	}

	public function tambah(){
		$this->load->view('tambah-soal');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$jenistrening = $this->input->post('jenistrening');
			$soal = $this->input->post('soal');
			$a = $this->input->post('a');
			$b = $this->input->post('b');
			$c = $this->input->post('c');
			$d = $this->input->post('d');
			$e = $this->input->post('e');
			$kunci = $this->input->post('kunci');
			$status = $this->input->post('status');
			//$gaji = $this->input->post('gaji');

			$simpan = array(
				'jenistrening' => $jenistrening,
				'soal' => $soal,
				'a' => $a,
				'b' => $b,
				'c' => $c,
				'd' => $d,
				'e' => $e,
				'kunci' => $kunci,
				'status' => $status
				);
			$simpan_proses = $this->Model_soal->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Soal Trening Berhasil !!!</div>");
			//if($hasil>=1){
			redirect('soal');
		//}
		}
	}

	public function edit($id){
		$soal['soal'] = $this->Model_soal->edit($id);
		$this->load->view('edit-soal', $soal);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
			$jenistrening = $this->input->post('jenistrening');
			$soal = $this->input->post('soal');
			$a = $this->input->post('a');
			$b = $this->input->post('b');
			$c = $this->input->post('c');
			$d = $this->input->post('d');
			$e = $this->input->post('e');
			$kunci = $this->input->post('kunci');
			$status = $this->input->post('status');

			$simpan = array(
				'jenistrening' => $jenistrening,
				'soal' => $soal,
				'a' => $a,
				'b' => $b,
				'c' => $c,
				'd' => $d,
				'e' => $e,
				'kunci' => $kunci,
				'status' => $status
				);

			$edit_proses = $this->Model_soal->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Soal Trening Berhasil !!!</div>");
			redirect('soal');
			
		}
	}

	public function hapus($id){
		$this->Model_soal->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Soal Trening Berhasil !!!</div>");
		redirect('soal');
	}

}
