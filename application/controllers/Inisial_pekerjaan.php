<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inisial_pekerjaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$pekerjaan['pekerjaan'] = $this->Model_inisial->get_pekerjaan();
		$this->load->view('inisial_pekerjaan/pekerjaan', $pekerjaan);
	}


}
