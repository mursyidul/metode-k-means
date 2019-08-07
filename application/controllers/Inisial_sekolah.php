<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inisial_sekolah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$sekolah['sekolah'] = $this->Model_inisial->get_sekolah();
		$this->load->view('inisial_sekolah/sekolah', $sekolah);
	}


}
