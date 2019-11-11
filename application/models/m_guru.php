<?php
class m_guru extends CI_Model
{
    public function __Construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function getallguru()
    {
        return $this->db->query("SELECT * FROM user WHERE role_id = 3")->result_array();
    }

    public function TambahDataguru()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "mapel" => $this->input->post('mapel', true)
        ];
        $this->db->insert('guru', $data);
    }

    public function hapusdataguru($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('guru');
    }

    public function getgurubyid($id)
    {
        return $this->db->get_where('guru', ['id' => $id])->row_array();
    }

    public function ubahdataguru()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "mapel" => $this->input->post('mapel', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('guru', $data);
    }
    public function create_tugas()
    {

        $data = [
            "id" => $this->input->post('id', true),
            "kode_tugas" => $this->input->post('kode', true),
            "mapel" => $this->input->post('mapel', true),
            "kelas" => $this->input->post('kelas', true),
            "guru" => $this->input->post('guru', true),
            "status" => "aktif",
            "waktu_pengumpulan" => $this->input->post('waktu', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "file" => $this->upload->data('file_name')
        ];
        $this->db->insert('tugas', $data);

    }
    public function get_tugas()
    {
        return $this->db->query("SELECT * FROM TUGAS ")->result_array();
    }
    public function getsiswa()
    {
        return $data = $this->db->query("SELECT * FROM user WHERE role_id = 2")->result_array();
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
    public function getsiswabyid($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function tambah_nilai()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "kelas" => $this->input->post('kelas', true),
            "nis" => $this->input->post('nis', true),
            "mapel" => $this->input->post('mapel', true),
            "nilai" => $this->input->post('nilai', true),
        ];
        $this->db->insert('nilai', $data);
    }
    public function ubah_nilai()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "kelas" => $this->input->post('kelas', true),
            "nis" => $this->input->post('nis', true),
            "mapel" => $this->input->post('mapel', true),
            "nilai" => $this->input->post('nilai', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('guru', $data);
    }
    public function get_nilai($id)
    {
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
    public function detail_tugas($id)
    {
        return $data = $this->db->get_where('tugas', ['id' => $id])->row_array();
    }
    public function download($id)
    {
        return $this->db->query("SELECT file FROM TUGAS WHERE ID =.'$id'")->result_array();
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tugas');
    }
}
