<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inisial_penghasilan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$penghasilan['penghasilan'] = $this->Model_inisial->get_penghasilan();
		$this->load->view('inisial_penghasilan/penghasilan', $penghasilan);
	}


}
