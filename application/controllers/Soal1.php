<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('Soal_model');
	}
	

	public function index()
	{
		$data = array(
			'soal'=>$this->Soal_model->Ambil('order by id_soal desc')->result_array(),			
		);  

		$this->load->view('soal/view', $data);
	}

	public function create()
	{
		$this->load->model('Model_jenistrening');
		//$data = array(
			//'jenistrening' => $this->Model_jenistrening->lihat_jenistrening('order by id_soal desc')->result_array()
		//);
		$data['jenistrening'] = $this->Model_jenistrening->lihat_jenistrening();

		$this->load->view('soal/create', $data);
	}
	
	public function insert(){
		if($this->input->post('simpan')){
			$jenistrening = $this->input->post('jenistrening');
			$soal = $this->input->post('soal');
			$a = $this->input->post('a');
			$b = $this->input->post('b');
			$c = $this->input->post('c');
			$d = $this->input->post('d');
			$e = $this->input->post('e');
			$kunci = $this->input->post('kunci');
			$status = $this->input->post('status');
			//$gaji = $this->input->post('gaji');

			$data = array(
				'jenistrening' => $jenistrening,
				'soal' => $soal,
				'a' => $a,
				'b' => $b,
				'c' => $c,
				'd' => $d,
				'e' => $e,
				'kunci' => $kunci,
				'status' => $status
				);

			$hasil = $this->Soal_model->Simpan($data);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Soal Trening Berhasil !!!</div>");
			//if($hasil>=1){
			redirect('soal');
		//}
		}
		
	}

	//public function insert(){
		
		//$config =array(
			//'upload_path' => './images',
			//'allowed_types' => 'gif|jpg|png|jpeg',
			//'max_size' => '200000',
			//);
			//$this->load->library('upload', $config);
			//$this->upload->do_upload('file_upload');
			//$upload_data = $this->upload->data();
		//$id_soal = '';
		//$jenistrening = $_POST['jenistrening'];
		//$soal = $_POST['soal'];
		//$a = $_POST['a'];
		//$b = $_POST['b'];
		//$c = $_POST['c'];
		//$d = $_POST['d'];
		//$e = $_POST['e'];
		//$kunci = $_POST['kunci'];
		//$status = $_POST['status'];

		//$data = array(
			//'id_soal' => $id_soal,
			//'jenistrening' => $jenistrening,
			//'soal' => $soal,
			//'a' => $a,
			//'b' => $b,
			//'c' => $c,
			//'d' => $d,
			//'e' => $e,
			//'kunci' => $kunci,
			//'status' => $status
			//);

		//$hasil = $this->Soal_model->Simpan('soal', $data);
		//$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Soal Treining Berhasil !!!</div>");
		//if($hasil>=1){
			//redirect('soal');
		//}
	//}
	//public function edit($id){
		//$soal['soal'] = $this->Soal_model->edit($id);
		//$this->load->view('soal/edit', $soal);
	//}

	//public function edit_proses($id){
		//if($this->input->post('simpan')){
			//$jenistrening = $this->input->post('jenistrening');
			//$soal = $this->input->post('soal');
			//$a = $this->input->post('a');
			//$b = $this->input->post('b');
			//$c = $this->input->post('c');
			//$d = $this->input->post('d');
			//$e = $this->input->post('e');
			//$kunci = $this->input->post('kunci');
			//$status = $this->input->post('status');

			//$simpan = array(
				//'jenistrening' => $jenistrening,
				//'soal' => $soal,
				//'a' => $a,
				//'b' => $b,
				//'c' => $c,
				//'d' => $d,
				//'e' => $e,
				//'kunci' => $kunci,
				//'status' => $status
				//);

			//$edit_proses = $this->Soal_model->edit_proses($simpan, $id);

			//$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Soal Trening Berhasil !!!</div>");
			//redirect('soal');
			
		//}
	//}
	public function edit($kode = 0){
		$data_soal = $this->Soal_model->Ambil("where id_soal = '$kode'")->result_array();
		$this->load->model('Model_jenistrening');

		$data = array(
			// 'jenistrening' => $this->Model_jenistrening->lihat_jenistrening(),
			'id_soal' => $data_soal[0]['id_soal'],
			'jenistrening' => $data_soal[0]['jenistrening'],
			'soal' => $data_soal[0]['soal'],
			'a' => $data_soal[0]['a'],
			'b' => $data_soal[0]['b'],
			'c' => $data_soal[0]['c'],
			'd' => $data_soal[0]['d'],
			'e' => $data_soal[0]['e'],
			'kunci' => $data_soal[0]['kunci'],
			'status' => $data_soal[0]['status'],
		);
		$this->load->view('soal/edit', $data);
	}

	public function update(){
		$soal = $this->input->post('id_soal');
		$data = array(
		 	'id_soal' => $this->input->post('id_soal'),
            'jenistrening' => $this->input->post('jenistrening'),
            'soal' => $this->input->post('soal'),
            'a' => $this->input->post('a'),
            'b' => $this->input->post('b'),
          	'c' => $this->input->post('c'),
            'd' => $this->input->post('d'),
            'e' => $this->input->post('e'),
            'kunci' => $this->input->post('kunci'),
            'status' => $this->input->post('status'),
        );

        $this->Soal_model->Rubah($soal, $data);
        redirect('soal');
	}

	public function delete($kode = 0){
		$hasil = $this->Soal_model->Hapus('soal',array('id_soal' => $kode));
		if($hasil == 1){
			redirect('soal');
		}else{
			echo "mohon periksa kembali";
		}
	}
}