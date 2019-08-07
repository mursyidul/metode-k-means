<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_profil extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_kmeans');
	}

	public function index(){
		$nilai_profil['nilai_profil'] = $this->Model_kmeans->selectdata('nilai_profil');
		//$nilai_profil = $this->Model_kmeans->selectdata('nilai_profil');
		$this->load->view('nilaiprofil/profil',$nilai_profil);
	}


}
