<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_jawaban extends Ci_Model {

  public function Ambil() {
    $data = $this->db->query('select * from jawaban, peserta where jawaban.id_peserta=peserta.id_peserta');
    return $data;
  }

  public function AmbilNilai2($idpst) {
    $data = $this->db->query("select * from jawaban, peserta where jawaban.id_peserta=peserta.id_peserta AND jawaban.id_peserta='$idpst'");
    return $data;
  }

 // public function Simpan($tabel, $data){
   // $res = $this->db->insert($tabel, $data);
   // return $res;
  //}
  function Simpan($data){
  $data = $this->db->query("select * from jawaban, peserta where jawaban.id_peserta=peserta.id_peserta AND jawaban.id_peserta='$idpst'");
    return $data;
		}

  public function Rubah($soal,$data)
  {
    $this->db->where('id_soal',$soal);
    $this->db->update('soal',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function UpdateTotalNilai($id_jawaban,$data)
  {
    $this->db->where('id_jawaban',$id_jawaban);
    $this->db->update('jawaban',$data);

  }
}