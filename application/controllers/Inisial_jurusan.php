<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inisial_jurusan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$jurusan['jurusan'] = $this->Model_inisial->get_jurusan();
		$this->load->view('inisial_jurusan/jurusan', $jurusan);
	}


}
