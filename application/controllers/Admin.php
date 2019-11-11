<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect(site_url('auth'));
        }
        $this->load->model('m_admin');
        $this->load->model('m_auth');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Admin';
        $data['role_id'] = $data['user']['role_id'];
        $this->load->view('template/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    public function siswa()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Kelola Siswa';
        $data['role_id'] = $data['user']['role_id'];
        $data['siswa'] = $this->m_admin->getallsiswa();
        $this->load->view('template/header', $data);
        $this->load->view('admin/siswa', $data);
        $this->load->view('template/footer');
    }
    public function tambah_siswa()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Kelola Siswa';
        $data['role_id'] = $data['user']['role_id'];
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'email sudah ada']);
        $this->form_validation->set_rules('nis', 'NIS', 'required|trim|is_unique[user.nis]', ['is_unique' => 'NIS Sudah Ada']);
        // $this->form_validation->set_rules('kelas', 'kelas', 'required|trim|numberic|max_length[1]',['numberic' => 'Kelas Harus Numberic']);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'password tidak sama',
            'min_length' => 'password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Tambah Siswa';
            $this->load->view('template/header', $data);
            $this->load->view('admin/tambah_siswa');
            $this->load->view('template/footer');
        } else {
            $this->m_auth->tambahuser();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/siswa');
        }
    }
    public function hapus_siswa($id)
    {
        $this->m_admin->hapusdatasiswa($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/siswa');
    }
    public function Detail_siswa($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Data Siswa";
        $data['siswa'] = $this->m_admin->getsiswabyid($id);
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_siswa', $data);
        $this->load->view('template/footer');
    }
    public function ubah_siswa($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Ubah Data Siswa';
        $data['siswa'] = $this->m_admin->getsiswabyid($id);
        $data['kelas'] = ['1', '2', '3', '4', '5', '6'];
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('nis', 'NIS', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/ubah_siswa', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_admin->ubahsiswa();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/siswa');
        }
    }
    public function guru()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['guru'] = $this->m_admin->getallguru();
        $data['judul'] = 'guru';
        $this->load->view('template/header', $data);
        $this->load->view('admin/guru', $data);
        $this->load->view('template/footer');
    }
    public function tambah_guru()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Kelola Guru';
        $data['role_id'] = $data['user']['role_id'];
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'email sudah ada']);
        $this->form_validation->set_rules('nis', 'NIP', 'required|trim|is_unique[user.nis]', ['is_unique' => 'NIP Sudah Ada']);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'password tidak sama',
            'min_length' => 'password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Tambah Guru';
            $this->load->view('template/header', $data);
            $this->load->view('admin/tambah_Guru');
            $this->load->view('template/footer');
        } else {
            $this->m_admin->tambahguru();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/guru');
        }
    }
    public function hapus_guru($id)
    {
        $this->m_admin->hapusdataguru($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/guru');
    }
    public function Detail_guru($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Data Guru";
        $data['guru'] = $this->m_admin->getgurubyid($id);
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_guru', $data);
        $this->load->view('template/footer');
    }
    public function ubah_guru($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Ubah Data guru';
        $data['guru'] = $this->m_admin->getgurubyid($id);
        $data['mapel'] = [
            'Bahasa Indonesia',
            'Bahasa Sunda',
            'Bahasa Inggris',
            'Pendidikan Agama',
            'Pendidikan Kewarganegaraan',
            'Matematika',
            'Ilmu Pengetahuan Alam',
            'Ilmu Pengetahuan Sosial',
            'Seni Budaya',
            'Pendidikan Jasmani Kesehatan'
        ];
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('nis', 'NIS', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/ubah_guru', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_admin->ubahguru();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/guru');
        }
    }
    public function kelas()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_admin->get_kelas();
        $this->load->view('template/header', $data);
        $this->load->view('admin/kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_admin->getclass1();
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_admin->getclass2();
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas3()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_admin->getclass3();
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas4()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_admin->getclass4();
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas5()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_admin->getclass5();
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas6()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_admin->getclass6();
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function jadwalkls1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Jadwal";
        $data['jadwal'] = $this->m_admin->getjadwalkls1();
        $this->load->view('template/header', $data);
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template/footer');
    }
    public function jadwalkls2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Jadwal";
        $data['jadwal'] = $this->m_admin->getjadwalkls2();
        $this->load->view('template/header', $data);
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template/footer');
    }
    public function jadwalkls3()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Jadwal";
        $data['jadwal'] = $this->m_admin->getjadwalkls3();
        $this->load->view('template/header', $data);
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template/footer');
    }
    public function jadwalkls4()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Jadwal";
        $data['jadwal'] = $this->m_admin->getjadwalkls4();
        $this->load->view('template/header', $data);
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template/footer');
    }
    public function jadwalkls5()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Jadwal";
        $data['jadwal'] = $this->m_admin->getjadwalkls5();
        $this->load->view('template/header', $data);
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template/footer');
    }
    public function jadwalkls6()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Jadwal";
        $data['jadwal'] = $this->m_admin->getjadwalkls6();
        $this->load->view('template/header', $data);
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template/footer');
    }

    public function tambah_jadwal()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Kelola jadwal';
        $data['role_id'] = $data['user']['role_id'];
        $this->form_validation->set_rules('hari', 'hari', 'required|trim');
        $this->form_validation->set_rules('kelas', 'kelas', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['guru'] = $this->m_admin->getallguru();
            $data['gurus'] = $this->m_admin->getallguru();
            $this->load->view('template/header', $data);
            $this->load->view('admin/tambah_jadwal');
            $this->load->view('template/footer');
        } else {
            $this->m_admin->tambah_jadwal();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/kelas');
        }
    }
    public function jadwal()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Jadwal";

        $this->load->view('template/header', $data);
        $this->load->view('admin/jadwal_home', $data);
        $this->load->view('template/footer');
    }
    public function Cetaksiswa()
    {
        $siswa['siswa'] = $this->m_admin->getallsiswa();

        // $guru[guru] = $this->db->query($sql)->result_array();
        $this->load->view('admin/cetak_siswa', $siswa);
    }
    public function Cetaksiswakls1()
    {
        $siswa['siswa'] = $this->m_admin->getclass1();

        // $guru[guru] = $this->db->query($sql)->result_array();
        $this->load->view('admin/cetak_siswa', $siswa);
    }
    public function Cetaksiswakls2()
    {
        $siswa['siswa'] = $this->m_admin->getclass2();

        // $guru[guru] = $this->db->query($sql)->result_array();
        $this->load->view('admin/cetak_siswa', $siswa);
    }
    public function Cetaksiswakls3()
    {
        $siswa['siswa'] = $this->m_admin->getclass3();

        // $guru[guru] = $this->db->query($sql)->result_array();
        $this->load->view('admin/cetak_siswa', $siswa);
    }
    public function Cetaksiswakls4()
    {
        $siswa['siswa'] = $this->m_admin->getclass4();

        // $guru[guru] = $this->db->query($sql)->result_array();
        $this->load->view('admin/cetak_siswa', $siswa);
    }
    public function Cetaksiswakls5()
    {
        $siswa['siswa'] = $this->m_admin->getclass5();

        // $guru[guru] = $this->db->query($sql)->result_array();
        $this->load->view('admin/cetak_siswa', $siswa);
    }
    public function Cetaksiswakls6()
    {
        $siswa['siswa'] = $this->m_admin->getclass6();

        // $guru[guru] = $this->db->query($sql)->result_array();
        $this->load->view('admin/cetak_siswa', $siswa);
    }
}