<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soal_model extends Ci_Model {

  public function Ambil($where= "") {
    $data = $this->db->query('select * from soal '.$where);
    return $data;
  }

  public function Simpan($data){
	$this->db->insert('soal', $data);
    return $res;
  }
  function edit($id){
			$proses = $this->db->where('id_soal', $id)->limit(1)->get('soal');

			if($proses->num_rows() > 0){
				return $proses->result();
			} else{
				return array();
			}
		}

  function edit_proses($simpan, $id){
			$this->db->where('id_soal', $id)->update('soal', $simpan);
		}
  public function Rubah($soal,$data)
  {
    $this->db->where('id_soal',$soal);
    $this->db->update('soal',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function AmbilPaket2($kode = 0) {
    $data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
    return $data[0]['jenistrening'];
  } 

  public function AmbilJawaban($kode = 0) {
    $data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
    return $data[0]['kunci'];
  }
}