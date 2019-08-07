<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centroid_c5 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$centroid_c5['centroid_c5'] = $this->Model_inisial->get_c5();
		$this->load->view('new_centroid/c5', $centroid_c5);
	}


}
