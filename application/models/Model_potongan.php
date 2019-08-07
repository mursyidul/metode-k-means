<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_potongan extends CI_Model {

		function lihat_bagian(){
			$proses = $this->db->get('potongan');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('potongan', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_potongan', $id)->limit(1)->get('potongan');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_potongan', $id)->update('potongan', $simpan);
		}


		function hapus($id){
			$this->db->where('id_potongan', $id)->delete('potongan');
		}

	}
?>