<?php
class m_jadwal extends CI_Model 
{
    public function getjadwalbyclass1()
    {
      return  $data = $this -> db -> query("SELECT DISTINCT * FROM jadwal WHERE hari IN ('senin','selasa','rabu') AND nama_kelas = 1 ORDER BY hari DESC") -> result_array();
    }
    public function getjadwalbyclass2()
    {
      return  $data = $this -> db -> query("SELECT * FROM jadwal WHERE nama_kelas = 1 AND hari = 'selasa'") -> result_array();
    }

    public function getjadwalbyclass3()
    {
      return  $data = $this -> db -> query("SELECT * FROM jadwal WHERE nama_kelas = 3") -> result_array();
    }

    public function getjadwalbyclass4()
    {
      return  $data = $this -> db -> query("SELECT * FROM jadwal WHERE nama_kelas = 4") -> result_array();
    }

    public function getjadwalbyclass5()
    {
      return  $data = $this -> db -> query("SELECT * FROM jadwal WHERE nama_kelas = 5") -> result_array();
    }
    
    public function getjadwalbyclass6()
    {
      return  $data = $this -> db -> query("SELECT * FROM jadwal WHERE nama_kelas = 6") -> result_array();
    }
}
