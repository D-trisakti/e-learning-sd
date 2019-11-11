<?php
class m_siswa extends CI_Model
{
  public function getsiswabyid()
  {
    return $this->db->get_where('user', ['id' => $id])->row_array();
  }
  public function get_nilai()
  {
    $nis = $this->session->userdata('nis');
    $id = $this->session->userdata('id');
    return $data = $this->db->query("SELECT * FROM user join nilai on user.nis = nilai.nis where user.id = $id")->result_array();
  }
  public function get_tugas1()
  {
    return $this->db->query("SELECT * FROM TUGAS WHERE KELAS = 1 ")->result_array();
  }
  public function get_tugas2()
  {
    return $this->db->query("SELECT * FROM TUGAS WHERE KELAS = 2 ")->result_array();
  }
  public function get_tugas3()
  {
    return $this->db->query("SELECT * FROM TUGAS WHERE KELAS = 3 ")->result_array();
  }
  public function get_tugas4()
  {
    return $this->db->query("SELECT * FROM TUGAS WHERE KELAS = 4 ")->result_array();
  }
  public function get_tugas5()
  {
    return $this->db->query("SELECT * FROM TUGAS WHERE KELAS = 5 ")->result_array();
  }
  public function get_tugas6()
  {
    return $this->db->query("SELECT * FROM TUGAS WHERE KELAS = 6 ")->result_array();
  }
  public function get_tugas()
  {
    $nis = $this->session->userdata('nis');
    $id = $this->session->userdata('kelas');
    return $data = $this->db->query("SELECT kelas FROM tugas WHERE kelas = 1")->result_array();
    var_dump($data);
    die();
  }
}