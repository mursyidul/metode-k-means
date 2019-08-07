<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_daerah_asal extends CI_Model {

		function lihat_daerah_asal(){
			$proses = $this->db->get('kota_asal');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('kota_asal', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_kota', $id)->limit(1)->get('kota_asal');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_kota', $id)->update('kota_asal', $simpan);
		}


		function hapus($id){
			$this->db->where('id_kota', $id)->delete('kota_asal');
		}

	}
?>