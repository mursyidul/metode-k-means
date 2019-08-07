<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_inisial extends CI_Model {

		
		function get_jenis(){
			$query = $this->db->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.id_jenis, jenis_kelamin.jenis_kelamin, COUNT( * ) as jumlah FROM jenis_kelamin
				JOIN mahasiswa ON mahasiswa.id_jenis = jenis_kelamin.id_jenis
                 GROUP BY mahasiswa.id_jenis order by jumlah DESC
				');
			return $query->result();
		
		}
		
		function get_jurusan(){
			$query = $this->db->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.id_jurusan, jurusan_sekolah.jurusan_sekolah, COUNT( * ) as jumlah FROM jurusan_sekolah
				JOIN mahasiswa ON mahasiswa.id_jurusan = jurusan_sekolah.id_jurusan
                 GROUP BY mahasiswa.id_jurusan order by jumlah DESC
				');
			return $query->result();
		
		}
		
		function get_kelas(){
			$query = $this->db->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.id_kelas, kelas.kelas, COUNT( * ) as jumlah FROM kelas
				JOIN mahasiswa ON mahasiswa.id_kelas = kelas.id_kelas
                 GROUP BY mahasiswa.id_kelas order by jumlah DESC
				');
			return $query->result();
		
		}
		
		function get_kota(){
			$query = $this->db->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.id_kota, kota_asal.kota_asal, COUNT( * ) as jumlah FROM kota_asal
				JOIN mahasiswa ON mahasiswa.id_kota = kota_asal.id_kota
                 GROUP BY mahasiswa.id_kota order by jumlah DESC
				');
			return $query->result();
		
		}

		function get_pekerjaan(){
			$query = $this->db->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.id_pekerjaan, pekerjaan_mahasiswa.pekerjaan_mahasiswa, COUNT( * ) as jumlah FROM pekerjaan_mahasiswa
				JOIN mahasiswa ON mahasiswa.id_pekerjaan = pekerjaan_mahasiswa.id_pekerjaan
                 GROUP BY mahasiswa.id_pekerjaan order by jumlah DESC
				');
			return $query->result();
		
		}
		
		function get_penghasilan(){
			$query = $this->db->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.id_penghasilan, penghasilan_ortu.penghasilan_ortu, COUNT( * ) as jumlah FROM penghasilan_ortu
				JOIN mahasiswa ON mahasiswa.id_penghasilan = penghasilan_ortu.id_penghasilan
                 GROUP BY mahasiswa.id_penghasilan order by jumlah DESC
				');
			return $query->result();
		
		}
		
		function get_sekolah(){
			$query = $this->db->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.id_sekolah, sekolah.sekolah, COUNT( * ) as jumlah FROM sekolah
				JOIN mahasiswa ON mahasiswa.id_sekolah = sekolah.id_sekolah
                 GROUP BY mahasiswa.id_sekolah order by jumlah DESC
				');
			return $query->result();
		
		}

		function get_status(){
			$query = $this->db->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.id_status, status.status, COUNT( * ) as jumlah FROM status
				JOIN mahasiswa ON mahasiswa.id_status = status.id_status
                 GROUP BY mahasiswa.id_status order by jumlah DESC
				');
			return $query->result();
		
		}

		function get_nilai_mahasiswa(){
			$query = $this->db->query('SELECT hasil_mahasiswa.id_hasil_mahasiswa,hasil_mahasiswa.nama,hasil_mahasiswa.usia, inisial_jenis.inisial AS jenis,inisial_jurusan.inisial AS jurusan,inisial_kelas.inisial AS kelas,inisial_daerah.inisial AS daerah, inisial_pekerjaan.inisial AS pekerjaan, inisial_penghasilan.inisial AS penghasilan,inisial_sekolah.inisial AS sekolah, inisial_status.inisial AS status_tes FROM hasil_mahasiswa, inisial_jenis, inisial_jurusan,inisial_kelas, inisial_daerah, inisial_pekerjaan, inisial_penghasilan, inisial_sekolah, inisial_status
				WHERE  hasil_mahasiswa.jenis = inisial_jenis.jenis
				AND hasil_mahasiswa.daerah = inisial_daerah.daerah
				AND hasil_mahasiswa.jurusan = inisial_jurusan.jurusan
				AND hasil_mahasiswa.kelas = inisial_kelas.kelas
				AND hasil_mahasiswa.pekerjaan = inisial_pekerjaan.pekerjaan
				AND hasil_mahasiswa.penghasilan = inisial_penghasilan.penghasilan
				AND hasil_mahasiswa.sekolah = inisial_sekolah.sekolah
				AND hasil_mahasiswa.status = inisial_status.status
                 GROUP BY hasil_mahasiswa.id_hasil_mahasiswa
				');
			return $query->result();
		
		}

		function get_c1(){
			$query = $this->db->query('SELECT centroid_temp.id_centroid, nilai_profil_mahasiswa.nama, nilai_profil_mahasiswa.jurusan, nilai_profil_mahasiswa.jenis, nilai_profil_mahasiswa.usia,
				nilai_profil_mahasiswa.penghasilan, nilai_profil_mahasiswa.sekolah, nilai_profil_mahasiswa.daerah, nilai_profil_mahasiswa.kelas,nilai_profil_mahasiswa.status,nilai_profil_mahasiswa.pekerjaan
				FROM centroid_temp, nilai_profil_mahasiswa
				WHERE centroid_temp.id_centroid = nilai_profil_mahasiswa.id_nilai_profil_mahasiswa
				AND c1= 1
				');
			return $query->result();
		
		}
		function get_c2(){
			$query = $this->db->query('SELECT centroid_temp.id_centroid, nilai_profil_mahasiswa.nama, nilai_profil_mahasiswa.jurusan, nilai_profil_mahasiswa.jenis, nilai_profil_mahasiswa.usia,
				nilai_profil_mahasiswa.penghasilan, nilai_profil_mahasiswa.sekolah, nilai_profil_mahasiswa.daerah, nilai_profil_mahasiswa.kelas,nilai_profil_mahasiswa.status,nilai_profil_mahasiswa.pekerjaan
				FROM centroid_temp, nilai_profil_mahasiswa
				WHERE centroid_temp.id_centroid = nilai_profil_mahasiswa.id_nilai_profil_mahasiswa
				AND c2= 1
				');
			return $query->result();
		
		}
		function get_c3(){
			$query = $this->db->query('SELECT centroid_temp.id_centroid, nilai_profil_mahasiswa.nama, nilai_profil_mahasiswa.jurusan, nilai_profil_mahasiswa.jenis, nilai_profil_mahasiswa.usia,
				nilai_profil_mahasiswa.penghasilan, nilai_profil_mahasiswa.sekolah, nilai_profil_mahasiswa.daerah, nilai_profil_mahasiswa.kelas,nilai_profil_mahasiswa.status,nilai_profil_mahasiswa.pekerjaan
				FROM centroid_temp, nilai_profil_mahasiswa
				WHERE centroid_temp.id_centroid = nilai_profil_mahasiswa.id_nilai_profil_mahasiswa
				AND c3= 1
				');
			return $query->result();
		
		}
		function get_c4(){
			$query = $this->db->query('SELECT centroid_temp.id_centroid, nilai_profil_mahasiswa.nama, nilai_profil_mahasiswa.jurusan, nilai_profil_mahasiswa.jenis, nilai_profil_mahasiswa.usia,
				nilai_profil_mahasiswa.penghasilan, nilai_profil_mahasiswa.sekolah, nilai_profil_mahasiswa.daerah, nilai_profil_mahasiswa.kelas,nilai_profil_mahasiswa.status,nilai_profil_mahasiswa.pekerjaan
				FROM centroid_temp, nilai_profil_mahasiswa
				WHERE centroid_temp.id_centroid = nilai_profil_mahasiswa.id_nilai_profil_mahasiswa
				AND c4= 1
				');
			return $query->result();
		
		}
		function get_c5(){
			$query = $this->db->query('SELECT centroid_temp.id_centroid, nilai_profil_mahasiswa.nama, nilai_profil_mahasiswa.jurusan, nilai_profil_mahasiswa.jenis, nilai_profil_mahasiswa.usia,
				nilai_profil_mahasiswa.penghasilan, nilai_profil_mahasiswa.sekolah, nilai_profil_mahasiswa.daerah, nilai_profil_mahasiswa.kelas,nilai_profil_mahasiswa.status,nilai_profil_mahasiswa.pekerjaan
				FROM centroid_temp, nilai_profil_mahasiswa
				WHERE centroid_temp.id_centroid = nilai_profil_mahasiswa.id_nilai_profil_mahasiswa
				AND c5= 1
				');
			return $query->result();
		
		}
		function jumlah_c1(){
			$query = $this->db->query('SELECT COUNT(*) as jumlah FROM c1
				');
			return $query->result();
		
		}
		function jumlah_c2(){
			$query = $this->db->query('SELECT COUNT(*) as jumlah FROM c2
				');
			return $query->result();
		
		}
		function jumlah_c3(){
			$query = $this->db->query('SELECT COUNT(*) as jumlah FROM c3
				');
			return $query->result();
		
		}
		function jumlah_c4(){
			$query = $this->db->query('SELECT COUNT(*) as jumlah FROM c4
				');
			return $query->result();
		
		}
		function jumlah_c5(){
			$query = $this->db->query('SELECT COUNT(*) as jumlah FROM c5
				');
			return $query->result();
		
		}

		function hasil1_jenis(){
			$query = $this->db->query('SELECT inisial_jenis.jenis as jenis_kelamin, COUNT(*) AS jumlah FROM inisial_jenis, c1 WHERE inisial_jenis.id_inisial_jenis = c1.jenis GROUP BY c1.jenis ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_jenis(){
			$query = $this->db->query('SELECT inisial_jenis.jenis as jenis_kelamin, COUNT(*) AS jumlah FROM inisial_jenis, c2 WHERE inisial_jenis.id_inisial_jenis = c2.jenis GROUP BY c2.jenis ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_jenis(){
			$query = $this->db->query('SELECT inisial_jenis.jenis as jenis_kelamin, COUNT(*) AS jumlah FROM inisial_jenis, c3 WHERE inisial_jenis.id_inisial_jenis = c3.jenis GROUP BY c3.jenis ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_jenis(){
			$query = $this->db->query('SELECT inisial_jenis.jenis as jenis_kelamin, COUNT(*) AS jumlah FROM inisial_jenis, c4 WHERE inisial_jenis.id_inisial_jenis = c4.jenis GROUP BY c4.jenis ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_jenis(){
			$query = $this->db->query('SELECT inisial_jenis.jenis as jenis_kelamin, COUNT(*) AS jumlah FROM inisial_jenis, c5 WHERE inisial_jenis.id_inisial_jenis = c5.jenis GROUP BY c5.jenis ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil1_jurusan(){
			$query = $this->db->query('SELECT inisial_jurusan.jurusan as jurusan_sekolah, COUNT(*) AS jumlah FROM inisial_jurusan, c1 WHERE inisial_jurusan.id_inisial_jurusan = c1.jurusan GROUP BY c1.jurusan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_jurusan(){
			$query = $this->db->query('SELECT inisial_jurusan.jurusan as jurusan_sekolah, COUNT(*) AS jumlah FROM inisial_jurusan, c2 WHERE inisial_jurusan.id_inisial_jurusan = c2.jurusan GROUP BY c2.jurusan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_jurusan(){
			$query = $this->db->query('SELECT inisial_jurusan.jurusan as jurusan_sekolah, COUNT(*) AS jumlah FROM inisial_jurusan, c3 WHERE inisial_jurusan.id_inisial_jurusan = c3.jurusan GROUP BY c3.jurusan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_jurusan(){
			$query = $this->db->query('SELECT inisial_jurusan.jurusan as jurusan_sekolah, COUNT(*) AS jumlah FROM inisial_jurusan, c4 WHERE inisial_jurusan.id_inisial_jurusan = c4.jurusan GROUP BY c4.jurusan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_jurusan(){
			$query = $this->db->query('SELECT inisial_jurusan.jurusan as jurusan_sekolah, COUNT(*) AS jumlah FROM inisial_jurusan, c5 WHERE inisial_jurusan.id_inisial_jurusan = c5.jurusan GROUP BY c5.jurusan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil1_usia(){
			$query = $this->db->query('SELECT c1.usia as usia,  COUNT( * ) AS jumlah FROM c1
			GROUP BY c1.usia ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_usia(){
			$query = $this->db->query('SELECT c2.usia as usia,  COUNT( * ) AS jumlah FROM c2
			GROUP BY c2.usia ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_usia(){
			$query = $this->db->query('SELECT c3.usia as usia,  COUNT( * ) AS jumlah FROM c3
			GROUP BY c3.usia ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_usia(){
			$query = $this->db->query('SELECT c4.usia as usia,  COUNT( * ) AS jumlah FROM c4
			GROUP BY c4.usia ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_usia(){
			$query = $this->db->query('SELECT c5.usia as usia,  COUNT( * ) AS jumlah FROM c5
			GROUP BY c5.usia ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil1_penghasilan(){
			$query = $this->db->query('SELECT inisial_penghasilan.penghasilan as penghasilan, COUNT(*) AS jumlah FROM inisial_penghasilan, c1 WHERE inisial_penghasilan.id_inisial_penghasilan = c1.penghasilan GROUP BY c1.penghasilan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_penghasilan(){
			$query = $this->db->query('SELECT inisial_penghasilan.penghasilan as penghasilan, COUNT(*) AS jumlah FROM inisial_penghasilan, c2 WHERE inisial_penghasilan.id_inisial_penghasilan = c2.penghasilan GROUP BY c2.penghasilan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_penghasilan(){
			$query = $this->db->query('SELECT inisial_penghasilan.penghasilan as penghasilan, COUNT(*) AS jumlah FROM inisial_penghasilan, c3 WHERE inisial_penghasilan.id_inisial_penghasilan = c3.penghasilan GROUP BY c3.penghasilan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_penghasilan(){
			$query = $this->db->query('SELECT inisial_penghasilan.penghasilan as penghasilan, COUNT(*) AS jumlah FROM inisial_penghasilan, c4 WHERE inisial_penghasilan.id_inisial_penghasilan = c4.penghasilan GROUP BY c4.penghasilan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_penghasilan(){
			$query = $this->db->query('SELECT inisial_penghasilan.penghasilan as penghasilan, COUNT(*) AS jumlah FROM inisial_penghasilan, c5 WHERE inisial_penghasilan.id_inisial_penghasilan = c5.penghasilan GROUP BY c5.penghasilan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil1_sekolah(){
			$query = $this->db->query('SELECT inisial_sekolah.sekolah as sekolah, COUNT(*) AS jumlah FROM inisial_sekolah, c1 WHERE inisial_sekolah.id_inisial_sekolah = c1.sekolah GROUP BY c1.sekolah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_sekolah(){
			$query = $this->db->query('SELECT inisial_sekolah.sekolah as sekolah, COUNT(*) AS jumlah FROM inisial_sekolah, c2 WHERE inisial_sekolah.id_inisial_sekolah = c2.sekolah GROUP BY c2.sekolah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_sekolah(){
			$query = $this->db->query('SELECT inisial_sekolah.sekolah as sekolah, COUNT(*) AS jumlah FROM inisial_sekolah, c3 WHERE inisial_sekolah.id_inisial_sekolah = c3.sekolah GROUP BY c3.sekolah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_sekolah(){
			$query = $this->db->query('SELECT inisial_sekolah.sekolah as sekolah, COUNT(*) AS jumlah FROM inisial_sekolah, c4 WHERE inisial_sekolah.id_inisial_sekolah = c4.sekolah GROUP BY c4.sekolah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_sekolah(){
			$query = $this->db->query('SELECT inisial_sekolah.sekolah as sekolah, COUNT(*) AS jumlah FROM inisial_sekolah, c5 WHERE inisial_sekolah.id_inisial_sekolah = c5.sekolah GROUP BY c5.sekolah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil1_daerah(){
			$query = $this->db->query('SELECT inisial_daerah.daerah as daerah, COUNT(*) AS jumlah FROM inisial_daerah, c1 WHERE inisial_daerah.id_inisial_daerah = c1.daerah GROUP BY c1.daerah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_daerah(){
			$query = $this->db->query('SELECT inisial_daerah.daerah as daerah, COUNT(*) AS jumlah FROM inisial_daerah, c2 WHERE inisial_daerah.id_inisial_daerah = c2.daerah GROUP BY c2.daerah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_daerah(){
			$query = $this->db->query('SELECT inisial_daerah.daerah as daerah, COUNT(*) AS jumlah FROM inisial_daerah, c3 WHERE inisial_daerah.id_inisial_daerah = c3.daerah GROUP BY c3.daerah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_daerah(){
			$query = $this->db->query('SELECT inisial_daerah.daerah as daerah, COUNT(*) AS jumlah FROM inisial_daerah, c4 WHERE inisial_daerah.id_inisial_daerah = c4.daerah GROUP BY c4.daerah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_daerah(){
			$query = $this->db->query('SELECT inisial_daerah.daerah as daerah, COUNT(*) AS jumlah FROM inisial_daerah, c5 WHERE inisial_daerah.id_inisial_daerah = c5.daerah GROUP BY c5.daerah ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil1_kelas(){
			$query = $this->db->query('SELECT inisial_kelas.kelas as kelas, COUNT(*) AS jumlah FROM inisial_kelas, c1 WHERE inisial_kelas.id_inisial_kelas = c1.kelas GROUP BY c1.kelas ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_kelas(){
			$query = $this->db->query('SELECT inisial_kelas.kelas as kelas, COUNT(*) AS jumlah FROM inisial_kelas, c2 WHERE inisial_kelas.id_inisial_kelas = c2.kelas GROUP BY c2.kelas ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_kelas(){
			$query = $this->db->query('SELECT inisial_kelas.kelas as kelas, COUNT(*) AS jumlah FROM inisial_kelas, c3 WHERE inisial_kelas.id_inisial_kelas = c3.kelas GROUP BY c3.kelas ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_kelas(){
			$query = $this->db->query('SELECT inisial_kelas.kelas as kelas, COUNT(*) AS jumlah FROM inisial_kelas, c4 WHERE inisial_kelas.id_inisial_kelas = c4.kelas GROUP BY c4.kelas ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_kelas(){
			$query = $this->db->query('SELECT inisial_kelas.kelas as kelas, COUNT(*) AS jumlah FROM inisial_kelas, c5 WHERE inisial_kelas.id_inisial_kelas = c5.kelas GROUP BY c5.kelas ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil1_status(){
			$query = $this->db->query('SELECT inisial_status.status as status, COUNT(*) AS jumlah FROM inisial_status, c1 WHERE inisial_status.id_inisial_status = c1.status GROUP BY c1.status ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_status(){
			$query = $this->db->query('SELECT inisial_status.status as status, COUNT(*) AS jumlah FROM inisial_status, c2 WHERE inisial_status.id_inisial_status = c2.status GROUP BY c2.status ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_status(){
			$query = $this->db->query('SELECT inisial_status.status as status, COUNT(*) AS jumlah FROM inisial_status, c3 WHERE inisial_status.id_inisial_status = c3.status GROUP BY c3.status ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_status(){
			$query = $this->db->query('SELECT inisial_status.status as status, COUNT(*) AS jumlah FROM inisial_status, c4 WHERE inisial_status.id_inisial_status = c4.status GROUP BY c4.status ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_status(){
			$query = $this->db->query('SELECT inisial_status.status as status, COUNT(*) AS jumlah FROM inisial_status, c5 WHERE inisial_status.id_inisial_status = c5.status GROUP BY c5.status ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil1_pekerjaan(){
			$query = $this->db->query('SELECT inisial_pekerjaan.pekerjaan as pekerjaan, COUNT(*) AS jumlah FROM inisial_pekerjaan, c1 WHERE inisial_pekerjaan.id_inisial_pekerjaan = c1.pekerjaan GROUP BY c1.pekerjaan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil2_pekerjaan(){
			$query = $this->db->query('SELECT inisial_pekerjaan.pekerjaan as pekerjaan, COUNT(*) AS jumlah FROM inisial_pekerjaan, c2 WHERE inisial_pekerjaan.id_inisial_pekerjaan = c2.pekerjaan GROUP BY c2.pekerjaan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil3_pekerjaan(){
			$query = $this->db->query('SELECT inisial_pekerjaan.pekerjaan as pekerjaan, COUNT(*) AS jumlah FROM inisial_pekerjaan, c3 WHERE inisial_pekerjaan.id_inisial_pekerjaan = c3.pekerjaan GROUP BY c3.pekerjaan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil4_pekerjaan(){
			$query = $this->db->query('SELECT inisial_pekerjaan.pekerjaan as pekerjaan, COUNT(*) AS jumlah FROM inisial_pekerjaan, c4 WHERE inisial_pekerjaan.id_inisial_pekerjaan = c4.pekerjaan GROUP BY c4.pekerjaan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}

		function hasil5_pekerjaan(){
			$query = $this->db->query('SELECT inisial_pekerjaan.pekerjaan as pekerjaan, COUNT(*) AS jumlah FROM inisial_pekerjaan, c5 WHERE inisial_pekerjaan.id_inisial_pekerjaan = c5.pekerjaan GROUP BY c5.pekerjaan ORDER BY jumlah DESC
				');
			return $query->result();
		
		}


	}
?>