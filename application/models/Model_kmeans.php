<?php

class Model_kmeans extends CI_Model {
	
	function insertdata($tabel, $data){
		return $this->db->insert($tabel,$data);
	}
	
	function deldata($tabel,$where){
		return $this->db->delete($tabel,$where);
	}
	
	function updatedata($tabel,$data,$where){
		return $this->db->update($tabel,$data,$where);
	}

	function selectdata($where = ''){
		return $this->db->query("select * from $where;");
	}

	function get_centroid(){
			$query = $this->db->query('SELECT AVG(c1.jurusan)jurusan1, AVG(c1.jenis)jenis1, AVG(c1.usia)usia1, AVG(c1.penghasilan)penghasilan1, AVG(c1.sekolah)sekolah1,
				AVG(c1.daerah)daerah1, AVG(c1.kelas)kelas1, AVG(c1.status)status1, AVG(c1.pekerjaan)pekerjaan1,AVG(c2.jurusan)jurusan2, AVG(c2.jenis)jenis2, AVG(c2.usia)usia2, AVG(c2.penghasilan)penghasilan2, AVG(c2.sekolah)sekolah2,
				AVG(c2.daerah)daerah2, AVG(c2.kelas)kelas2, AVG(c2.status)status2, AVG(c2.pekerjaan)pekerjaan2,AVG(c3.jurusan)jurusan3, AVG(c3.jenis)jenis3, AVG(c3.usia)usia3, AVG(c3.penghasilan)penghasilan3, AVG(c3.sekolah)sekolah3,
				AVG(c3.daerah)daerah3, AVG(c3.kelas)kelas3, AVG(c3.status)status3, AVG(c3.pekerjaan)pekerjaan3,AVG(c4.jurusan)jurusan4, AVG(c4.jenis)jenis4, AVG(c4.usia)usia4, AVG(c4.penghasilan)penghasilan4, AVG(c4.sekolah)sekolah4,
				AVG(c4.daerah)daerah4, AVG(c4.kelas)kelas4, AVG(c4.status)status4, AVG(c4.pekerjaan)pekerjaan4,AVG(c5.jurusan)jurusan5, AVG(c5.jenis)jenis5, AVG(c5.usia)usia5, AVG(c5.penghasilan)penghasilan5, AVG(c5.sekolah)sekolah5,
				AVG(c5.daerah)daerah5, AVG(c5.kelas)kelas5, AVG(c5.status)status5, AVG(c5.pekerjaan)pekerjaan5 
				FROM c1,c2,c3,c4,c5 
				');
			return $query->result();
		
		}

		function get_centroid1(){
			$query = $this->db->query('select c1a, c1b, c1c, c1d, c1e, c1f, c1g, c1h, c1i, c2a, c2b, c2c, c2d, c2e, c2f, c2g, c2h, c2i, c3a, c3b, c3c, c3d, c3e, c3f, c3g, c3h, c3i, c4a, c4b, c4c, c4d, c4e, c4f, c4g, c4h, c4i, c5a, c5b, c5c, c5d, c5e, c5f, c5g, c5h, c5i from hasil_centroid');
			return $query->result();

		}
		function delete(){
			$this->db->select_min('nomor')->from('hasil_centroid');
			$this->db->where('nomor')->delete('hasil_centroid');
		}

		function kode(){
		$query = $this->db->query('SELECT COUNT(*) FROM hasil_centroid');
		
		return $query->result();
		}

		function purty_measur(){
		$query = $this->db->query('SELECT * FROM hasil_centroid ORDER BY nomor DESC LIMIT 1');
		
		return $query->result();
		}

		function kelompok(){
			$query = $this->db->query('SELECT c1a,c1b,c1c,c1d,c1e,c1f,c1g,c1h,c1i,c2a,c2b,c2c,c2d,c2e,c2f,c2g,c2h,c2i,c3a,c3b,c3c,c3d,c3e,c3f,c3g,c3h,c3i,c4a,c4b,c4c,c4d,c4e,c4f,c4g,c4h,c4i,c5a,c5b,c5c,c5d,c5e,c5f,c5g,c5h,c5i  FROM hasil_centroid
			GROUP BY c1a, c1b, c1c, c1d, c1e, c1f, c1g, c1h, c1i, c2a, c2b, c2c, c2d, c2e, c2f, c2g, c2h, c2i, c3a, c3b, c3c, c3d, c3e, c3f, c3g, c3h, c3i, c4a, c4b, c4c, c4d, c4e, c4f, c4g, c4h, c4i, c5a, c5b, c5c, c5d, c5e, c5f, c5g, c5h, c5i 
			HAVING COUNT(*) > 1');
			return $query->result();
		}

		
	
}

?>