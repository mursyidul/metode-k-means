<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centroid_c4 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$centroid_c4['centroid_c4'] = $this->Model_inisial->get_c4();
		$this->load->view('new_centroid/c4', $centroid_c4);
	}


}
