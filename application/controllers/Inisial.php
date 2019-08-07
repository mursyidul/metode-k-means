<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inisial extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$jenis['jenis'] = $this->Model_inisial->get_jenis();
		$jenis['jurusan'] = $this->Model_inisial->get_jurusan();
		$jenis['kelas'] = $this->Model_inisial->get_kelas();
		$jenis['kota'] = $this->Model_inisial->get_kota();
		$jenis['pekerjaan'] = $this->Model_inisial->get_pekerjaan();
		$jenis['penghasilan'] = $this->Model_inisial->get_penghasilan();
		$jenis['sekolah'] = $this->Model_inisial->get_sekolah();
		$jenis['status'] = $this->Model_inisial->get_status();
		$jenis['daerah'] = $this->Model_inisial->get_kota();
		$this->load->view('jenis/jenis1', $jenis);
	}


}
