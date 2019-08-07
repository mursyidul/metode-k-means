<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_puskesmas extends CI_Model {

		function lihat_puskesmas(){
			$proses = $this->db->get('data_puskesmas');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('data_puskesmas', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('no_puskesmas', $id)->limit(1)->get('data_puskesmas');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('no_puskesmas', $id)->update('data_puskesmas', $simpan);
		}


		function hapus($id){
			$this->db->where('no_puskesmas', $id)->delete('data_puskesmas');
		}

	}
?>