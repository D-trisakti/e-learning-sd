<?php
class m_admin extends CI_Model
{

    public function getallsiswa()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE role_id = 2")->result_array();
    }
    public function hapusdatasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function getsiswabyid($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function ubahsiswa()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'nis' => htmlspecialchars($this->input->post('nis', true)),
            'role_id' => 2,
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'is_active' => 1,
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
    public function getallguru()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE role_id = 3")->result_array();
    }
    public function tambahguru()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'Email' => htmlspecialchars($this->input->post('Email', true)),
            'nis' => htmlspecialchars($this->input->post('nis', true)),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 3,
            'mapel' => htmlspecialchars($this->input->post('mapel', true)),
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('user', $data);
    }
    public function hapusdataguru($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function getgurubyid($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function ubahguru()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'nis' => htmlspecialchars($this->input->post('nis', true)),
            'role_id' => 3,
            'mapel' => htmlspecialchars($this->input->post('mapel', true)),
            'is_active' => 1,
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
    public function getclass1()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE kelas =1")->result_array();
    }
    public function getclass2()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE kelas =2")->result_array();
    }
    public function getclass3()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE kelas =3")->result_array();
    }
    public function getclass4()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE kelas =4")->result_array();
    }
    public function getclass5()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE kelas =5")->result_array();
    }
    public function getclass6()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE kelas =6")->result_array();
    }
    public function getjadwalkls1()
    {
        return $data = $this->db->query("SELECT * FROM jadwal WHERE nama_kelas ='1'")->result_array();
    }
    public function getjadwalkls2()
    {
        return $data = $this->db->query("SELECT * FROM jadwal WHERE nama_kelas ='2'")->result_array();
    }
    public function getjadwalkls3()
    {
        return $data = $this->db->query("SELECT * FROM jadwal WHERE nama_kelas ='3'")->result_array();
    }
    public function getjadwalkls4()
    {
        return $data = $this->db->query("SELECT * FROM jadwal WHERE nama_kelas ='4'")->result_array();
    }
    public function getjadwalkls5()
    {
        return $data = $this->db->query("SELECT * FROM jadwal WHERE nama_kelas ='5'")->result_array();
    }
    public function getjadwalkls6()
    {
        return $data = $this->db->query("SELECT * FROM jadwal WHERE nama_kelas ='6'")->result_array();
    }
    public function tambah_jadwal()
    {
        $data = [
            'hari' => htmlspecialchars($this->input->post('hari', true)),
            'jam_mulai' => htmlspecialchars($this->input->post('jam_mulai', true)),
            'jam_selesai' => htmlspecialchars($this->input->post('jam_selesai', true)),
            'nama_guru' => htmlspecialchars($this->input->post('guru', true)),
            'nama_mapel' => htmlspecialchars($this->input->post('mapel', true)),
            'nama_kelas' => htmlspecialchars($this->input->post('kelas', true))
        ];
        $this->db->insert('jadwal', $data);
    }
    public function get_kelas()
    {
        return $data = $this->db->query("SELECT * FROM kelas ")->result_array();
    }
    public function get_detail_by_id($kelas)
    {
        return $this->db->get_where('user', ['kelas' => $kelas])->result_array();
    }
    public function total_kelas()
    {
        $this->db->select('COUNT(kelas) as count');
        $this->db->from('user');
        $this->db->where(array('kelas !=' => ''));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->count;
        }
        return 0;
    }
    public function total()
    {
        return $data = $this->db->query("SELECT * FROM USER WHERE kelas = '1'")->result_array();
    }
}
