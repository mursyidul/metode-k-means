<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Centroid_model extends CI_Model
{	
	private $tb_centroid='centroid';	
	
    function __construct()
    {
         $this->load->library('m_db');
    }
    
    function centroid_data($where=array(),$order="id_centroid ASC")
    {
		$d=$this->m_db->get_data($this->tb_centroid,$where,$order);
		return $d;
	}
	
}