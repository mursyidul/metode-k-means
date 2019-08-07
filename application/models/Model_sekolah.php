<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_sekolah extends CI_Model {

		function lihat_sekolah(){
			$proses = $this->db->get('sekolah');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('sekolah', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_sekolah', $id)->limit(1)->get('sekolah');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_sekolah', $id)->update('sekolah', $simpan);
		}


		function hapus($id){
			$this->db->where('id_sekolah', $id)->delete('sekolah');
		}

	}
?>