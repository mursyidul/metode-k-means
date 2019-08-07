<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_peserta extends CI_Model {

		function lihat_peserta(){
			$proses = $this->db->order_by('id_peserta','DESC')->get('peserta');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function simpan_proses($simpan_peserta, $simpan_users){
			$this->db->insert('peserta', $simpan_peserta);
			$this->db->insert('users', $simpan_users);
		}

		function edit($nik){
			$bulan = $this->session->userdata('bulan');
			$proses = $this->db->where('nik', $nik)->limit(1)->get('peserta');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $nik){
			$bulan = $this->session->userdata('bulan');
			$this->db->where('nik', $nik)->where('bulan', $bulan)->update('peserta', $simpan);
		}

		function edit_password_proses($simpan, $nik){
			$this->db->where('nik', $nik)->update('users', $simpan);
		}


		function hapus($nik){
			$bulan = $this->session->userdata('bulan');
			$this->db->where('nik', $nik)->where('bulan', $bulan)->delete('peserta');
			$this->db->where('nik', $nik)->delete('users');
		}

		function cek_pass($pass_lama, $nik){

			$cek = $this->db->where('nik', $nik)->like('password', md5($pass_lama))->limit(1)->get('users');
			if($cek->num_rows() > 0){
				return $cek->row();
			} else {
				return array();
			}
		}
		public function AmbilIdpst($nik = '') {
		$data = $this->db->query("select * from peserta where id_peserta = '$nik'")->result_array();
		return $data;
  }
		public function AmbilNik($username = '') {
		$data = $this->db->query("select * from users where username = '$username'")->result_array();
		return $data[0]['nik'];
  }

	}
?>