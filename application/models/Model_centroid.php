<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_centroid extends CI_Model {

		function lihat_centroid(){
			$proses = $this->db->get('centroid1');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function lihat_centroid2(){
			$proses = $this->db->get('centroid2');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function lihat_centroid3(){
			$proses = $this->db->get('centroid3');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function lihat_centroid4(){
			$proses = $this->db->get('centroid4');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function lihat_centroid5(){
			$proses = $this->db->get('centroid5');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan){
			$this->db->insert('centroid', $simpan);
		}

		function edit($id){
			$proses = $this->db->where('id_centroid1', $id)->limit(1)->get('centroid1');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_centroid1', $id)->update('centroid1', $simpan);
		}

		function edit2($id){
			$proses = $this->db->where('id_centroid2', $id)->limit(1)->get('centroid2');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses2($simpan, $id){
			$this->db->where('id_centroid2', $id)->update('centroid2', $simpan);
		}

		function edit3($id){
			$proses = $this->db->where('id_centroid3', $id)->limit(1)->get('centroid3');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses3($simpan, $id){
			$this->db->where('id_centroid3', $id)->update('centroid3', $simpan);
		}

		function edit4($id){
			$proses = $this->db->where('id_centroid4', $id)->limit(1)->get('centroid4');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses4($simpan, $id){
			$this->db->where('id_centroid4', $id)->update('centroid4', $simpan);
		}


		function edit5($id){
			$proses = $this->db->where('id_centroid5', $id)->limit(1)->get('centroid5');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses5($simpan, $id){
			$this->db->where('id_centroid5', $id)->update('centroid5', $simpan);
		}


		function hapus($id){
			$this->db->where('id_centroid', $id)->delete('centroid');
		}

	}
?>