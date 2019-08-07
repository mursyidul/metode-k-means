<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inisial_daerah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$daerah['daerah'] = $this->Model_inisial->get_kota();
		$this->load->view('inisial_daerah/daerah', $daerah);
	}


}
