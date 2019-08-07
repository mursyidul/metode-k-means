<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_soal extends CI_Model {

		function lihat_soal($soal){
			$proses = $this->db->get('soal');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('soal', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_soal', $id)->limit(1)->get('soal');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_soal', $id)->update('soal', $simpan);
		}


		function hapus($id){
			$this->db->where('id_soal', $id)->delete('soal');
		}

		function AmbilPaket2($soal){
			$proses = $this->db->get('soal');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}
		public function AmbilJawaban($kode = 0) {
		$data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
		return $data;
		}

	}
?>