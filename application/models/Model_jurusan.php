<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_jurusan extends CI_Model {

		function lihat_jurusan(){
			$proses = $this->db->get('jurusan_sekolah');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('jurusan_sekolah', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_jurusan', $id)->limit(1)->get('jurusan_sekolah');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_jurusan', $id)->update('jurusan_sekolah', $simpan);
		}


		function hapus($id){
			$this->db->where('id_jurusan', $id)->delete('jurusan_sekolah');
		}

	}
?>