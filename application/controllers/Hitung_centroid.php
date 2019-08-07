<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung_centroid extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('m_db');
		$this->load->model('Centroid_model','mod_centroid');
	}

	public function index(){
	
		$output=array();
        $dcentroid=$this->mod_centroid->centroid_data();
		foreach($dcentroid as $rK)
		{
			$output[$rK->id_centroid]=$rK->nama;
		}		
    	$d['arr']=$output;
    	$this->load->view('hitung_centroid/nilai_centroid',$d);
		
		
	}
	
	


}
