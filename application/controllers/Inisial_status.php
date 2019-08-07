<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inisial_status extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$status['status'] = $this->Model_inisial->get_status();
		$this->load->view('inisial_status/status', $status);
	}


}
