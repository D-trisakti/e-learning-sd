<?php
class Siswa extends CI_controller
{
    public function __Construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect(site_url('auth'));
        }
        $this->load->model('m_siswa');
        $this->load->library('form_validation');

    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Siswa';
        $this->load->view('template/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer');

    }
    public function Detail()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Data Siswa";
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('template/footer');
    }
    public function nilai()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Data Siswa";
        $data['nil'] = $this->m_siswa->get_nilai();
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail_nilai', $data);
        $this->load->view('template/footer');
    }
    public function tugas1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $kelas = $data['user']['kelas'];
        $data['judul'] = "Detail Tugas ";
        $data['tugas'] = $this->m_siswa->get_tugas1();
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail_tugas', $data);
        $this->load->view('template/footer');
    }

    public function tugas2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $kelas = $data['user']['kelas'];
        $data['judul'] = "Detail Tugas ";
        $data['tugas'] = $this->m_siswa->get_tugas2();
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail_tugas', $data);
        $this->load->view('template/footer');
    }
    public function tugas3()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $kelas = $data['user']['kelas'];
        $data['judul'] = "Detail Tugas ";
        $data['tugas'] = $this->m_siswa->get_tugas3();
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail_tugas', $data);
        $this->load->view('template/footer');
    }
    public function tugas4()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $kelas = $data['user']['kelas'];
        $data['judul'] = "Detail Tugas ";
        $data['tugas'] = $this->m_siswa->get_tugas4();
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail_tugas', $data);
        $this->load->view('template/footer');
    }
    public function tugas5()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $kelas = $data['user']['kelas'];
        $data['judul'] = "Detail Tugas ";
        $data['tugas'] = $this->m_siswa->get_tugas5();
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail_tugas', $data);
        $this->load->view('template/footer');
    }
    public function tugas6()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $kelas = $data['user']['kelas'];
        $data['judul'] = "Detail Tugas ";
        $data['tugas'] = $this->m_siswa->get_tugas6();
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail_tugas', $data);
        $this->load->view('template/footer');
    }
}
