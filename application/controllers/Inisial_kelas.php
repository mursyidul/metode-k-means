<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inisial_kelas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$kelas['kelas'] = $this->Model_inisial->get_kelas();
		$this->load->view('inisial_kelas/kelas', $kelas);
	}


}
