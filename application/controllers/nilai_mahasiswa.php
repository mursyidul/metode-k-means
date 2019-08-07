<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_mahasiswa');
	}

	public function index(){
		
		$nilai_mahasiswa['nilai_mahasiswa'] = $this->Model_mahasiswa->lihat_nilaimahasiswa();
		$this->load->view('nilai_mahasiswa/nilai_mahasiswa1',$nilai_mahasiswa);
	}



}
