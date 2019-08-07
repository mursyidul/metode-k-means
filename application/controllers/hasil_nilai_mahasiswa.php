<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_nilai_mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$hasil_nilai_mahasiswa['hasil_nilai_mahasiswa'] = $this->Model_inisial->get_nilai_mahasiswa();
		$this->load->view('hasil_nilai_mahasiswa/nilai_mahasiswa', $hasil_nilai_mahasiswa);
	}


}
