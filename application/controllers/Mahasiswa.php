<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_mahasiswa');
	}

	public function index(){
		
		$mahasiswa['mahasiswa'] = $this->Model_mahasiswa->lihat_mahasiswa2();
		$this->load->view('mahasiswa/mahasiswa1',$mahasiswa);
	}

	public function tambah(){
		$this->load->view('mahasiswa/tambah-mahasiswa');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
            $nama               =   $this->input->post('nama');
            $usia_masuk         =   $this->input->post('usia_masuk');
            $jenis              =   $this->input->post('jeniskelamin');
            $jurusan            =   $this->input->post('jurusansekolah');
            $kelas              =   $this->input->post('kelas1');
            $kota               =   $this->input->post('kotaasal');
            $pekerjaan          =   $this->input->post('pekerjaanmahasiswa');
            $penghasilan        =   $this->input->post('penghasilanortu');
            $sekolah            =   $this->input->post('sekolah1');
            $status             =   $this->input->post('status');

			$simpan = array(
				'nama' => $nama,
				'usia_masuk' => $usia_masuk,
				'id_jenis' => $jenis,
				'id_jurusan' => $jurusan,
				'id_kelas' => $kelas,
				'id_kota' => $kota,
				'id_pekerjaan' => $pekerjaan,
				'id_penghasilan' => $penghasilan,
				'id_sekolah' => $sekolah,
				'id_status'  => $status
				
				);

			$simpan_proses = $this->Model_mahasiswa->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Mahasiswa Berhasil !!!</div>");
			redirect('mahasiswa');
			
		}
	}


	public function tambah_proses1(){
		if($this->input->post('simpan')){
            $nama               =   $this->input->post('nama');
            $usia_masuk         =   $this->input->post('usia_masuk');
            $jenis              =   $this->input->post('jeniskelamin');
            $jurusan            =   $this->input->post('jurusansekolah');
            $kelas              =   $this->input->post('kelas1');
            $kota               =   $this->input->post('kotaasal');
            $pekerjaan          =   $this->input->post('pekerjaanmahasiswa');
            $penghasilan        =   $this->input->post('penghasilanortu');
            $sekolah            =   $this->input->post('sekolah1');
            $status             =   $this->input->post('status');

			$simpan = array(
				'nama' => $nama,
				'usia_masuk' => $usia_masuk,
				'id_jenis' => $jenis,
				'id_jurusan' => $jurusan,
				'id_kelas' => $kelas,
				'id_kota' => $kota,
				'id_pekerjaan' => $pekerjaan,
				'id_penghasilan' => $penghasilan,
				'id_sekolah' => $sekolah,
				'id_status'  => $status
				
				);

			$simpan_proses = $this->Model_mahasiswa->simpan_proses($simpan);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Mahasiswa Berhasil !!!</div>");
			redirect('mahasiswa');
			
		}
	}

	public function edit($id){
		$mahasiswa['mahasiswa'] = $this->Model_mahasiswa->edit($id);
		$this->load->view('mahasiswa/edit-mahasiswa', $mahasiswa);
	}

	public function edit_proses($id){
		if($this->input->post('simpan')){
            $nama               =   $this->input->post('nama');
            $usia_masuk         =   $this->input->post('usia_masuk');
            $jenis              =   $this->input->post('jeniskelamin');
            $jurusan            =   $this->input->post('jurusansekolah');
            $kelas              =   $this->input->post('kelas1');
            $kota               =   $this->input->post('kotaasal');
            $pekerjaan          =   $this->input->post('pekerjaanmahasiswa');
            $penghasilan        =   $this->input->post('penghasilanortu');
            $sekolah            =   $this->input->post('sekolah1');
            $status             =   $this->input->post('status');

			$simpan = array(
				'nama' => $nama,
				'usia_masuk' => $usia_masuk,
				'id_jenis' => $jenis,
				'id_jurusan' => $jurusan,
				'id_kelas' => $kelas,
				'id_kota' => $kota,
				'id_pekerjaan' => $pekerjaan,
				'id_penghasilan' => $penghasilan,
				'id_sekolah' => $sekolah,
				'id_status'  => $status
				);

			$edit_proses = $this->Model_mahasiswa->edit_proses($simpan, $id);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Mahasiswa Berhasil !!!</div>");
			redirect('mahasiswa');
			
		}
	}

	public function hapus($id){
		$this->Model_mahasiswa->hapus($id);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data Mahasiswa Berhasil !!!</div>");
		redirect('mahasiswa');
	}

}
