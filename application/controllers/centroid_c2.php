<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centroid_c2 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$centroid_c2['centroid_c2'] = $this->Model_inisial->get_c2();
		$this->load->view('new_centroid/c2', $centroid_c2);
	}


}
