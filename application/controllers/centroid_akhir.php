<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centroid_akhir extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_inisial');
	}

	public function index(){
		$centroid_c1['centroid_c1'] = $this->Model_inisial->get_c1();
		$centroid_c1['centroid_c2'] = $this->Model_inisial->get_c2();
		$centroid_c1['centroid_c3'] = $this->Model_inisial->get_c3();
		$centroid_c1['centroid_c4'] = $this->Model_inisial->get_c4();
		$centroid_c1['centroid_c5'] = $this->Model_inisial->get_c5();
		$this->load->view('new_centroid/c1', $centroid_c1);
	}

	public function lama(){

		$data_lama1 = $this->db->get('hasil_centroid')->row();
                    print_r($data_lama1);
	}


}
