<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centroid_c3 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$centroid_c3['centroid_c3'] = $this->Model_inisial->get_c3();
		$this->load->view('new_centroid/c3', $centroid_c3);
	}


}
