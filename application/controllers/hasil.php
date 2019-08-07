<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hasil extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_kmeans');
		$this->load->model('Model_inisial');
	}

	public function index(){
		$centroid_baru['c1'] = $this->Model_inisial->jumlah_c1();
		$centroid_baru['c2'] = $this->Model_inisial->jumlah_c2();
		$centroid_baru['c3'] = $this->Model_inisial->jumlah_c3();	
		$centroid_baru['c4'] = $this->Model_inisial->jumlah_c4();
		$centroid_baru['c5'] = $this->Model_inisial->jumlah_c5();
		$centroid_baru['jenis1'] = $this->Model_inisial->hasil1_jenis();
		$centroid_baru['jenis2'] = $this->Model_inisial->hasil2_jenis();
		$centroid_baru['jenis3'] = $this->Model_inisial->hasil3_jenis();
		$centroid_baru['jenis4'] = $this->Model_inisial->hasil4_jenis();
		$centroid_baru['jenis5'] = $this->Model_inisial->hasil5_jenis();	
		$centroid_baru['jurusan1'] = $this->Model_inisial->hasil1_jurusan();	
		$centroid_baru['jurusan2'] = $this->Model_inisial->hasil2_jurusan();	
		$centroid_baru['jurusan3'] = $this->Model_inisial->hasil3_jurusan();	
		$centroid_baru['jurusan4'] = $this->Model_inisial->hasil4_jurusan();	
		$centroid_baru['jurusan5'] = $this->Model_inisial->hasil5_jurusan();	
		$centroid_baru['usia1'] = $this->Model_inisial->hasil1_usia();	
		$centroid_baru['usia2'] = $this->Model_inisial->hasil2_usia();	
		$centroid_baru['usia3'] = $this->Model_inisial->hasil3_usia();	
		$centroid_baru['usia4'] = $this->Model_inisial->hasil4_usia();	
		$centroid_baru['usia5'] = $this->Model_inisial->hasil5_usia();	
		$centroid_baru['penghasilan1'] = $this->Model_inisial->hasil1_penghasilan();	
		$centroid_baru['penghasilan2'] = $this->Model_inisial->hasil2_penghasilan();	
		$centroid_baru['penghasilan3'] = $this->Model_inisial->hasil3_penghasilan();	
		$centroid_baru['penghasilan4'] = $this->Model_inisial->hasil4_penghasilan();	
		$centroid_baru['penghasilan5'] = $this->Model_inisial->hasil5_penghasilan();	
		$centroid_baru['sekolah1'] = $this->Model_inisial->hasil1_sekolah();	
		$centroid_baru['sekolah2'] = $this->Model_inisial->hasil2_sekolah();	
		$centroid_baru['sekolah3'] = $this->Model_inisial->hasil3_sekolah();	
		$centroid_baru['sekolah4'] = $this->Model_inisial->hasil4_sekolah();	
		$centroid_baru['sekolah5'] = $this->Model_inisial->hasil5_sekolah();	
		$centroid_baru['daerah1'] = $this->Model_inisial->hasil1_daerah();	
		$centroid_baru['daerah2'] = $this->Model_inisial->hasil2_daerah();	
		$centroid_baru['daerah3'] = $this->Model_inisial->hasil3_daerah();	
		$centroid_baru['daerah4'] = $this->Model_inisial->hasil4_daerah();	
		$centroid_baru['daerah5'] = $this->Model_inisial->hasil5_daerah();	
		$centroid_baru['kelas1'] = $this->Model_inisial->hasil1_kelas();	
		$centroid_baru['kelas2'] = $this->Model_inisial->hasil2_kelas();	
		$centroid_baru['kelas3'] = $this->Model_inisial->hasil3_kelas();	
		$centroid_baru['kelas4'] = $this->Model_inisial->hasil4_kelas();	
		$centroid_baru['kelas5'] = $this->Model_inisial->hasil5_kelas();	
		$centroid_baru['status1'] = $this->Model_inisial->hasil1_status();	
		$centroid_baru['status2'] = $this->Model_inisial->hasil2_status();	
		$centroid_baru['status3'] = $this->Model_inisial->hasil3_status();	
		$centroid_baru['status4'] = $this->Model_inisial->hasil4_status();	
		$centroid_baru['status5'] = $this->Model_inisial->hasil5_status();	
		$centroid_baru['pekerjaan1'] = $this->Model_inisial->hasil1_pekerjaan();	
		$centroid_baru['pekerjaan2'] = $this->Model_inisial->hasil2_pekerjaan();	
		$centroid_baru['pekerjaan3'] = $this->Model_inisial->hasil3_pekerjaan();	
		$centroid_baru['pekerjaan4'] = $this->Model_inisial->hasil4_pekerjaan();	
		$centroid_baru['pekerjaan5'] = $this->Model_inisial->hasil5_pekerjaan();	
		$centroid_baru['purty_measuer'] = $this->Model_kmeans->purty_measur();
				

							 
		$this->load->view('new_centroid/hasil', $centroid_baru);
		
		
	}

	public function hasil(){
		$purty_measuer = $this->Model_kmeans->purty_measur();
				$c1a = "";
				$c1b = "";
				$c1c = "";
				$c1d = "";
				$c1e = "";
				$c1f = "";
				$c1g = "";
				$c1h = "";
				$c1i = "";
				$c2a = "";
				$c2b = "";
				$c2c = "";
				$c2d = "";
				$c2e = "";
				$c2f = "";
				$c2g = "";
				$c2h = "";
				$c2i = "";
				$c3a = "";
				$c3b = "";
				$c3c = "";
				$c3d = "";
				$c3e = "";
				$c3f = "";
				$c3g = "";
				$c3h = "";
				$c3i = "";
				$c4a = "";
				$c4b = "";
				$c4c = "";
				$c4d = "";
				$c4e = "";
				$c4f = "";
				$c4g = "";
				$c4h = "";
				$c4i = "";
				$c5a = "";
				$c5b = "";
				$c5c = "";
				$c5d = "";
				$c5e = "";
				$c5f = "";
				$c5g = "";
				$c5h = "";
				$c5i = "";

			foreach ($purty_measuer as $key => $value) {
				$c1a = $value->c1a;
				$c1b = $value->c1b;
				$c1c = $value->c1c;
				$c1d = $value->c1d;
				$c1e = $value->c1e;
				$c1f = $value->c1f;
				$c1g = $value->c1g;
				$c1h = $value->c1h;
				$c1i = $value->c1i;
				$c2a = $value->c2a;
				$c2b = $value->c2b;
				$c2c = $value->c2c;
				$c2d = $value->c2d;
				$c2e = $value->c2e;
				$c2f = $value->c2f;
				$c2g = $value->c2g;
				$c2h = $value->c2h;
				$c2i = $value->c2i;
				$c3a = $value->c3a;
				$c3b = $value->c3b;
				$c3c = $value->c3c;
				$c3d = $value->c3d;
				$c3e = $value->c3e;
				$c3f = $value->c3f;
				$c3g = $value->c3g;
				$c3h = $value->c3h;
				$c3i = $value->c3i;
				$c4a = $value->c4a;
				$c4b = $value->c4b;
				$c4c = $value->c4c;
				$c4d = $value->c4d;
				$c4e = $value->c4e;
				$c4f = $value->c4f;
				$c4g = $value->c4g;
				$c4h = $value->c4h;
				$c4i = $value->c4i;
				$c5a = $value->c5a;
				$c5b = $value->c5b;
				$c5c = $value->c5c;
				$c5d = $value->c5d;
				$c5e = $value->c5e;
				$c5f = $value->c5f;
				$c5g = $value->c5g;
				$c5h = $value->c5h;
				$c5i = $value->c5i;
				


			}
			$nilai_besar = $c1c + $c2c + $c3c + $c4c + $c5c;
				//redirect('hasil');

	}


}
