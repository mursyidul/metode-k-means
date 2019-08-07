<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_mahasiswa extends CI_Model {

		function lihat_mahasiswa(){
			$proses = $this->db->get('mahasiswa'); 
			
			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}
		
		function lihat_mahasiswa2(){
				$this->db->select('mahasiswa.id_mahasiswa,mahasiswa.nama,mahasiswa.usia_masuk,jenis_kelamin.jenis_kelamin,jurusan_sekolah.jurusan_sekolah,
					 kelas.kelas,kota_asal.kota_asal,pekerjaan_mahasiswa.pekerjaan_mahasiswa,penghasilan_ortu.penghasilan_ortu, sekolah.sekolah, status.status')
				->join('jenis_kelamin','jenis_kelamin.id_jenis=mahasiswa.id_jenis')
				->join('jurusan_sekolah','jurusan_sekolah.id_jurusan=mahasiswa.id_jurusan')
				->join('kelas','kelas.id_kelas=mahasiswa.id_kelas')
				->join('kota_asal','kota_asal.id_kota=mahasiswa.id_kota')
				->join('pekerjaan_mahasiswa','pekerjaan_mahasiswa.id_pekerjaan=mahasiswa.id_pekerjaan')
				->join('penghasilan_ortu','penghasilan_ortu.id_penghasilan=mahasiswa.id_penghasilan')
				->join('sekolah','sekolah.id_sekolah=mahasiswa.id_sekolah')
				->join('status','status.id_status=mahasiswa.id_status');
				 
				//return $this->db->get('mahasiswa')->result();
				$proses = $this->db->get('mahasiswa');
			
			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}


		

		function simpan_proses($simpan){
			$this->db->insert('mahasiswa', $simpan); 
		}

		function edit($id){
			$proses = $this->db->where('id_mahasiswa', $id)->limit(1)->get('mahasiswa');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

		function edit_proses($simpan, $id){
			$this->db->where('id_mahasiswa', $id)->update('mahasiswa', $simpan);
		}


		function hapus($id){
			$this->db->where('id_mahasiswa', $id)->delete('mahasiswa');
		}

	}
?>