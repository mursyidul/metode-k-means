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
		$kelompok = $this->Model_kmeans->kelompok();
 		
		 
		if ($kelompok) {
			?>
				<script>
					alert("Proses iterasi berakhir ");
				</script>
			<?php
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."hasil'>";
		} else {
			$this->load->view('new_centroid/centroid_baru1', $centroid_baru);
		}
		

		
		
		
		
	}


}
