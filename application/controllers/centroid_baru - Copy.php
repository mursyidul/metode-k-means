<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centroid_baru extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_kmeans');
		$this->load->model('Model_inisial');
	}

	public function index(){
		$centroid_baru['centroid_baru'] = $this->Model_kmeans->get_centroid();
		$centroid_baru['data_lama1'] =$this->db->get('hasil_centroid');
		$centroid = $this->Model_kmeans->get_centroid1();
		$centroid_lama = $this->Model_kmeans->get_centroid();
		$no=0;
		foreach($centroid_lama as $value)
		{
			$jurusan1 = $value->jurusan1;
			$jenis1 = $value->jenis1;
			$usia1 = $value->usia1;
			$penghasilan1 = $value->penghasilan1;
			$sekolah1 = $value->sekolah1;
			$daerah1 = $value->daerah1;
			$kelas1 = $value->kelas1;
			$status1 = $value->status1;
			$pekerjaan1 =$value->pekerjaan1;
			$jurusan2 = $value->jurusan2;
			$jenis2 = $value->jenis2;
			$usia2 = $value->usia2;
			$penghasilan2 = $value->penghasilan2;
			$sekolah2 = $value->sekolah2;
			$daerah2 = $value->daerah2;
			$kelas2 = $value->kelas2;
			$status2 = $value->status2;
			$pekerjaan2 =$value->pekerjaan2;
			$jurusan3 = $value->jurusan3;
			$jenis3 = $value->jenis3;
			$usia3 = $value->usia3;
			$penghasilan3 = $value->penghasilan3;
			$sekolah3 = $value->sekolah3;
			$daerah3 = $value->daerah3;
			$kelas3 = $value->kelas3;
			$status3 = $value->status3;
			$pekerjaan3 =$value->pekerjaan3;
			$jurusan4 = $value->jurusan4;
			$jenis4 = $value->jenis4;
			$usia4 = $value->usia4;
			$penghasilan4 = $value->penghasilan4;
			$sekolah4 = $value->sekolah4;
			$daerah4 = $value->daerah4;
			$kelas4 = $value->kelas4;
			$status4 = $value->status4;
			$pekerjaan4 =$value->pekerjaan4;
			$jurusan5 = $value->jurusan5;
			$jenis5 = $value->jenis5;
			$usia5 = $value->usia5;
			$penghasilan5 = $value->penghasilan5;
			$sekolah5 = $value->sekolah5;
			$daerah5 = $value->daerah5;
			$kelas5 = $value->kelas5;
			$status5 = $value->status5;
			$pekerjaan5 =$value->pekerjaan5;
			$no++;
		}
		$query = $this->db->query('select c1a, c1b, c1c, c1d, c1e, c1f, c1g, c1h, c1i, c2a, c2b, c2c, c2d, c2e, c2f, c2g, c2h, c2i, c3a, c3b, c3c, c3d, c3e, c3f, c3g, c3h, c3i, c4a, c4b, c4c, c4d, c4e, c4f, c4g, c4h, c4i, c5a, c5b, c5c, c5d, c5e, c5f, c5g, c5h, c5i from hasil_centroid');
			return $query->result();
			$centroid = $this->Model_kmeans->get_centroid1();
		$no=0;
		foreach($centroid as $value)
		{
			$value->c1a;
			$value->c1b;
			$value->c1c;
			$value->c1d;
			$value->c1e;
			$value->c1f;
			$value->c1g;
			$value->c1h;
			$value->c1i;
			$value->c2a;
			$value->c2b;
			$value->c2c;
			$value->c2d;
			$value->c2e;
			$value->c2f;
			$value->c2g;
			$value->c2h;
			$value->c2i;
			$value->c3a;
			$value->c3b;
			$value->c3c;
			$value->c3d;
			$value->c3e;
			$value->c3f;
			$value->c3g;
			$value->c3h;
			$value->c3i;
			$value->c4a;
			$value->c4b;
			$value->c4c;
			$value->c4d;
			$value->c4e;
			$value->c4f;
			$value->c4g;
			$value->c4h;
			$value->c4i;
			$value->c5a;
			$value->c5b;
			$value->c5c;
			$value->c5d;
			$value->c5e;
			$value->c5f;
			$value->c5g;
			$value->c5h;
			$value->c5i;	
			$no++;
		}
		if ($jurusan1 == $value->c1a || $jenis1 == $value->c1b || $usia1 == $value->c1c || $penghasilan1 == $value->c1d || $sekolah1 == $value->c1e || $daerah1 == $value->c1f || $jurusan1 == $value->c1g || $kelas1 == $value->c1h || $pekerjaan1 == $value->c1i || $jurusan2 == $value->c2a || $jenis2 == $value->c2b || $usia2 == $value->c2c || $penghasilan2 == $value->c2d || $sekolah2 == $value->c2e || $daerah2 == $value->c2f || $jurusan2 == $value->c2g || $kelas2 == $value->c2h || $pekerjaan2 == $value->c2i || $jurusan3 == $value->c3a || $jenis3 == $value->c3b || $usia3 == $value->c3c || $penghasilan3 == $value->c3d || $sekolah3 == $value->c3e || $daerah3 == $value->c3f || $jurusan3 == $value->c3g || $kelas3 == $value->c3h || $pekerjaan3 == $value->c3i || $jurusan4 == $value->c4a || $jenis4 == $value->c4b || $usia4 == $value->c4c || $penghasilan4 == $value->c4d || $sekolah4 == $value->c4e || $daerah4 == $value->c4f || $jurusan4 == $value->c4g || $kelas4 == $value->c4h || $pekerjaan4 == $value->c4i || $jurusan5 == $value->c5a || $jenis5 == $value->c5b || $usia5 == $value->c5c || $penghasilan5 == $value->c5d || $sekolah5 == $value->c5e || $daerah5 == $value->c5f || $jurusan5 == $value->c5g || $kelas5 == $value->c5h || $pekerjaan5 == $value->c5i ) {
			?>
				<script>
					alert("Proses iterasi berakhir ");
				</script>
			<?php
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."centroid_c1'>";
		} else {
			$this->load->view('new_centroid/centroid_baru', $centroid_baru, $centroid_lama, $centroid);
		}
		
	}


}
