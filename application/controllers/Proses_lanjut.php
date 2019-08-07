<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_lanjut extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_kmeans');
	}

	public function index(){
		$nilai_profil['nilai_profil'] = $this->Model_kmeans->selectdata('perhitungan_centroid');
		$this->load->view('nilaiprofil/profil4',$nilai_profil);
	}


}
