<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_profil_lanjut extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_kmeans');
	}

	public function index(){
		$data ['nilai_profil'] = $this->db->get('nilai_profil_mahasiswa');
		$id = "";
		$id = $this->db->query('select max(nomor) as m from hasil_centroid');
		foreach($id->result() as $i)
		{
			$id = $i->m;
		}
		$this->db->where('nomor', $id);
		$data['centroid'] = $this->db->get('hasil_centroid');
		$data['id'] = $id+1;
		
		$it = "";
		$it = $this->db->query('select max(iterasi) as it from centroid_temp');
		foreach($it->result() as $i)
		{
			$it = $i->it;
		}
		
		$it_temp = $it-1;
		$this->db->where('iterasi', $it_temp);
		$it_sebelum = $this->db->get('centroid_temp');
		$c1_sebelum = array();
		$c2_sebelum = array();
		$c3_sebelum = array();
		$c4_sebelum = array();
		$c5_sebelum = array();
		$no=0;
		foreach($it_sebelum->result() as $it_prev)
		{
			$c1_sebelum[$no] = $it_prev->c1;
			$c2_sebelum[$no] = $it_prev->c2;
			$c3_sebelum[$no] = $it_prev->c3;
			$c4_sebelum[$no] = $it_prev->c4;
			$c5_sebelum[$no] = $it_prev->c5;
			$no++;
		}

		$this->db->where('iterasi', $it);
		$it_sesesudah = $this->db->get('centroid_temp');
		$c1_sesesudah = array();
		$c2_sesesudah = array();
		$c3_sesesudah = array();
		$c4_sesesudah = array();
		$c5_sesesudah = array();
		$no=0;
		foreach($it_sesesudah->result() as $it_next)
		{
			$c1_sesesudah[$no] = $it_next->c1;
			$c2_sesesudah[$no] = $it_next->c2;
			$c3_sesesudah[$no] = $it_next->c3;
			$c4_sesesudah[$no] = $it_next->c4;
			$c5_sesesudah[$no] = $it_next->c5;
			$no++;
		}

		if($c1_sebelum==$c1_sesesudah and $c2_sebelum==$c2_sesesudah and $c3_sebelum==$c3_sesesudah and $c4_sebelum==$c4_sesesudah and $c5_sebelum==$c5_sesesudah)
		{
			?>
				<script>
					alert("Proses iterasi berakhir pada tahap ke-<?php echo $it; ?>");
				</script>
			<?php
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."centroid_baru'>";
		}
		else
		{
			
			$this->load->view('nilaiprofil/profil3',$data);
			
		}
		
	}

	


}
