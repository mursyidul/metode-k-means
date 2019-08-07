<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('Model_jawaban');				
		$this->load->model('Model_login');				
		$this->load->model('Model_soal');				
		$this->load->model('Model_peserta');
	}
	

	public function index()
	{
		
		$data = array(
			'nilai'=>$this->Model_jawaban->Ambil()->result_array(),			
		);  

		$this->load->view('jawaban/index', $data);
	}	

	public function cetak()
	{
		
		$data = array(
			'nilai'=>$this->Model_jawaban->Ambil()->result_array(),			
		);		
		$this->load->library('fpdf');	
		$this->load->view('jawaban/cetak', $data);
	}

	public function nilai()
	{	
		$this->load->model('Model_login');	
		$this->load->model('Modelpeserta');	
		$user = $this->session->userdata('username');		
		$user = $this->Model_login->userdata($user);	

		$user2 = $this->session->userdata('username');	
        $nik = $this->Model_login->AmbilNik($user2);
        $idMhs = $this->Model_peserta->AmbilIdpst($nik);

		$data = array(
			'nilai'=>$this->Model_jawaban->AmbilNilai2($idpst)->result_array(),
			'user' =>$user,			
		);  

		$this->load->view('jawaban/nilai', $data);
	}

	public function dnilai($kode = 0){
		//$this->ceklogin();		

		$data = array(
			'nilai'=>$this->Model_login->AmbilDetailNilai($kode)->result_array(),				
			'kode'=>$kode,				
		);
		$this->load->view('jawaban/dnilai', $data);
	}

	public function dnilai2($kode = 0){
		//$this->ceklogin();		

		$data = array(
			'nilai'=>$this->Model_login->AmbilDetailNilai($kode)->result_array(),				
			'kode'=>$kode,				
		);
		$this->load->view('jawaban/dnilai2', $data);
	}

	public function daftar(){
		$this->load->model('Model_login');
		$this->load->model('Model_peserta');

		$user = $this->session->userdata('username');
        $nik = $this->Model_login->AmbilNik($user);
        $idpst = $this->Model_peserta->AmbilIdpst($nik);

		$data = array(			
			'id_peserta' => $idpst,
			'tgl_tes' =>date("Y-m-d"),			
		);

		$this->Model_jawaban->Simpan($data);
		$id=mysql_insert_id();		

		redirect('jawaban/soal/'.$id);
	}

	public function soal(){	  	
    	$this->load->model('Model_soal');	

    	$soal1['soal'] = $this->Model_soal->lihat_soal("where soal.status = 'tampil' order by RAND()");
		
		//echo $this->db->last_query();
		
    	        
        //$data = array(
			//"soal" => $soal->soal,
			//"total_soal" =>$soal,
			//"id_jawaban" => $id,
		//);

        $this->load->view('jawaban/soal', $soal1);       
    }

    public function jawab(){   
        $this->load->model('Model_soal');    
        $this->load->model('Model_jawaban_detail');    
        $id_jawaban = $this->input->post('id_jawaban'); 
        
        $jawaban=$_POST["jawaban"];
		$id_soal=$_POST["soal"];
		$jumlah=$_POST["soal"];

        for ($i=0;$i<$jumlah;$i++){   		

        	$nomor=$i;
        	$jawaban=$nomor;		    

        	$data = array(
				'id_jawaban' => $id_jawaban,						
				'id_soal' => $nomor,						
				'id_jenistrening' => $this->Model_soal->AmbilPaket2($nomor),						
				'jawaban' => $jawaban[$nomor],						
				'kunci' =>$this->Model_soal->AmbilJawaban($nomor),						
			);
		    //echo "<p>ID SOAL ".$nomor." Jawaban = ".$jawaban[$nomor]." Kunci = ".$this->modeladmin->AmbilJawaban($nomor)."</p>";
			$this->Model_jawaban_detail->lihat_jawaban_detail('jawaban_detail', $data);
		}

        //$sql = $this->Model_jawaban_detail->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();

		foreach($sql->result_array() as $data) {
			if($data['id_jenistrening']==1 OR $data['id_jenistrening']==2){
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
					$data = array(
						'nilai' => 1,						
					);
					$this->Model_jawaban_detail->UpdateNilai($id_jawaban_detail, $data);
				}
			}
			else {
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
					$data = array(
						'nilai' => 5,						
					);
					$this->Model_jawaban_detail->UpdateNilai($id_jawaban_detail, $data);
				}
				else {
					$data = array(
						'nilai' => 1,						
					);
					$this->Model_jawaban_detail->UpdateNilai($id_jawaban_detail, $data);
				}

			}
		}
     	     			
	    $benar=0;
		$salah=0;
		$total_nilai=0;
	
		$sql = $this->Model_jawaban_detail->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();

		foreach($sql->result_array() as $data) {
			if($data['jawaban']==$data['kunci']){
				$benar++;
			}
			else {
				$salah++;
			}
			$total_nilai += $data['nilai'];
		}		

		$data = array(
		 	'benar' => $benar,
            'salah' => $salah,
            'total_nilai' => $total_nilai,
    	);		
	
		$this->Model_jawaban->UpdateTotalNilai($id_jawaban, $data);

		$this->session->sess_destroy();
		redirect('jawaban/dnilai/');
    }
}