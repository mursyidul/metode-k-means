<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_peserta');
	}

	public function index(){
		$peserta['peserta'] = $this->Model_peserta->lihat_peserta();
		$this->load->view('peserta', $peserta);
	}

	public function tambah(){
		$this->load->view('tambah-peserta');
	}
	
	public function cek(){
		// $bulan = $this->input->post('bulan');
		$bulan = $this->session->userdata('bulan');
		if($this->session->userdata('bagian') == 'peserta'){
			$nik = $this->session->userdata('nik');
			$peserta = $this->db->where('nik', $nik)->where('bulan', $bulan)->get('peserta');	
		} else {
			$peserta = $this->db->where('bulan', $bulan)->get('peserta');			
		}

		// $absensi = $this->Model_absensi->cek_absen();

		if($peserta == FALSE){
			echo "TIDAK ADA DATA";
		} else {
			// echo "<table id='myTable' class='table table-hover'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>No</th>";
					echo "<th>NIK</th>";
					echo "<th>Nama</th>";
					echo "<th>Tempat</th>";
					echo "<th>Tgl_Lahir</th>";
					echo "<th>Alamat</th>";
					echo "<th>Jenis Kelamin</th>";
					echo "<th>Lulusan</th>";
					echo "<th>Jenis Trening</th>";
					echo "<th>Perusahaan</th>";
					if($this->session->userdata('bagian') == 'hrd'){
					echo "<th>Aksi</th>";
					}
				echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
				$a=0;
				foreach ($peserta->result() as $key => $value) {
					$a++;
				echo "<tr>";
					echo "<td>".$a."</td>";
					echo "<td>".$value->nik."</td>";
					echo "<td>".$value->nama."</td>";
					echo "<td>".$value->tempat."</td>";
					echo "<td>".$value->tgl_lahir."</td>";
					echo "<td>".$value->alamat."</td>";
					echo "<td>".$value->jenis_kelamin."</td>";
					echo "<td>".$value->lulusan."</td>";
					echo "<td>".$value->jenistreining."</td>";
					echo "<td>".$value->perusahaan."</td>";
					if($this->session->userdata('bagian') == 'hrd'){
						
							echo "<td><div id='thanks'>";

							echo anchor('peserta/edit/'.$value->nik,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Peserta']);
							echo "&nbsp;";
							echo anchor('peserta/hapus/'.$value->nik,"<span class='glyphicon glyphicon-trash'></span>",['class'=>'btn btn-sm btn-danger tooltips','onclick'=>"return confirm ('Yakin ingin hapus $value->nik?')", 'data-toggle'=>'tooltip','title'=>'Hapus Peserta', 'data-placement'=>'bottom']);
							echo "</div></td>";
						
					
					}

				echo "</tr>";
				}
			echo "</tbody>";
			// echo "</table>";
		}
	}


	public function tes(){
		$bulan = $this->input->post('bulan');

		$this->session->set_userdata('bulan', $bulan);

		redirect('peserta/cek');
	}

	public function tambah_proses(){
		if($this->input->post('simpan')){
			$nik = $this->input->post('nik');
			$nama= $this->input->post('nama');
			$tempat= $this->input->post('tempat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$lulusan = $this->input->post('lulusan');
			$jenistrening = $this->input->post('jenistrening');
			$perusahaan = $this->input->post('perusahaan');
			$bulan = $this->input->post('bulan');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$simpan_peserta = array(
				'nik' => $nik,
				'nama' => $nama,
				'tempat' => $tempat,
				'tgl_lahir' => $tgl_lahir,
				'alamat' => $alamat,
				'jenis_kelamin' => $jenis_kelamin,
				'lulusan' => $lulusan,
				'jenistreining' => $jenistrening,
				'perusahaan' => $perusahaan,
				'bulan' => $bulan
				);

			$simpan_users = array(
				'nik' => $nik,
				'username' => $username,
				'password' => md5($password),
				'bagian' => 'peserta'
				);

			$simpan_proses = $this->Model_peserta->simpan_proses($simpan_peserta, $simpan_users);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Tambah Data Peserta Berhasil !!!</div>");
			redirect('peserta');
			
		}
	}

	public function edit($nik){
		$peserta['peserta'] = $this->Model_peserta->edit($nik);
		$this->load->view('edit-peserta', $peserta);
	}

	public function edit_proses($nik){
		if($this->input->post('simpan')){
			$nama= $this->input->post('nama');
			$tempat= $this->input->post('tempat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$lulusan = $this->input->post('lulusan');
			$jenistrening = $this->input->post('jenistrening');
			$perusahaan = $this->input->post('perusahaan');
			$bulan = $this->input->post('bulan');

			$simpan = array(
				'nama' => $nama,
				'tempat' => $tempat,
				'tgl_lahir' => $tgl_lahir,
				'alamat' => $alamat,
				'jenis_kelamin' => $jenis_kelamin,
				'lulusan' => $lulusan,
				'jenistreining' => $jenistrening,
				'perusahaan' => $perusahaan,
				'bulan' => $bulan
				);

			$edit_proses = $this->Model_peserta->edit_proses($simpan, $nik);

			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Edit Data Peserta Berhasil !!!</div>");
			redirect('peserta');
			
		}
	}

	public function edit_password($nik){
		$peserta['peserta'] = $this->Model_peserta->edit($nik);
		$this->load->view('edit-password-peserta', $peserta);
	}

	public function edit_password_proses($nik){
		$pass_lama = $this->input->post('pass_lama');
		$pass_baru = $this->input->post('pass_baru');
		$kon = $this->input->post('konf_pass');

		$cek_pass = $this->Model_peserta->cek_pass($pass_lama, $nik);

		if($cek_pass == FALSE){
			$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Ubah Password Gagal !!!</div>");
			redirect('peserta/edit-password/'.$nik);
		} else {
			$this->form_validation->set_rules('pass_baru','Password Baru','required');
			$this->form_validation->set_rules('konf_pass','Konfirmasi Password', 'matches[pass_baru]');
			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Ubah Password Gagal !!!</div>");
				redirect('peserta/edit-password/'.$nik);
			} else {
				$simpan = array(
					'password' => md5($pass_baru)
					);
				$this->Model_peserta->edit_password_proses($simpan, $nik);
				$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Ubah Password Berhasil !!!</div>");
				redirect('peserta');
			}
		}
	}

	public function hapus($nik){
		$this->Model_peserta->hapus($nik);

		$this->session->set_flashdata('pesan', "<div class='alert alert-dismissible alert-success'><button type='button' class='close' id='hide' data-dismiss='alert'>&times;</button>Hapus Data peserta Berhasil !!!</div>");
		redirect('peserta');
	}

}
