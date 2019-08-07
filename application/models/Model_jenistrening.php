<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_jenistrening extends CI_Model {

		function lihat_jenistrening(){
			$proses = $this->db->get('jenistrening');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('jenistrening', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_jenistrening', $id)->limit(1)->get('jenistrening');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_jenistrening', $id)->update('jenistrening', $simpan);
		}


		function hapus($id){
			$this->db->where('id_jenistrening', $id)->delete('jenistrening');
		}

	}
?>