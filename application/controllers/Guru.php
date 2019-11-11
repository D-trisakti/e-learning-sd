<?php
class guru extends CI_controller
{
    public function __Construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect(site_url('auth'));
        }
        $this->load->helper(array('form', 'url'));
        $this->load->model('m_guru');
        $this->load->library('form_validation');
        $this->load->library('pdf');
        $this->load->helper('download');

    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = 'Guru';
        $this->load->view('template/header', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('template/footer');
    }
    public function Detail()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Data guru";
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail', $data);
        $this->load->view('template/footer');
    }
    public function tugas()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "tugas";
        $data['tugas'] = $this->m_guru->get_tugas();
        $this->load->view('template/header', $data);
        $this->load->view('guru/tugas', $data);
        $this->load->view('template/footer');
    }

    public function tambah_tugas()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')], ['email' => $this->session->userdata('nama')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "tambah tugas";
        $this->form_validation->set_rules('kode', 'kode', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('guru/tambah_tugas', $data);
            $this->load->view('template/footer');
        } else {
            $upload = $_FILES['berkas']['name'];
            if ($upload) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = '*';
                $config['max_size'] = '204800';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $uploads = $this->upload->data('file_name');
                    $this->db->set('file', $uploads);
                    $this->m_guru->create_tugas();
                    $this->session->set_flashdata('flash', 'ditambahkan');
                    redirect('guru/tugas');
                } else {
                    echo $this->upload->display_errors();

                }
            }

        }
    }


    public function nilai()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Nilai Siswa";
        $data['siswa'] = $this->m_guru->getsiswa();
        $this->load->view('template/header', $data);
        $this->load->view('guru/Nilai', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_guru->getclass1();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_guru->getclass2();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas3()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_guru->getclass3();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas4()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_guru->getclass4();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas5()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_guru->getclass5();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function detail_kelas6()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Kelas";
        $data['kelas'] = $this->m_guru->getclass6();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_kelas', $data);
        $this->load->view('template/footer');
    }
    public function tambah_nilai($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Tambah Nilai";
        $data['siswa'] = $this->m_guru->getsiswabyid($id);
        $this->form_validation->set_rules('nilai', 'nilai', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('guru/tambah_nilai', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_guru->tambah_nilai();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('guru/nilai');
        }
    }
    public function ubah($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Ubah Nilai";
        $data['siswa'] = $this->m_guru->getsiswabyid($id);
        $this->form_validation->set_rules('nilai', 'nilai', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('guru/ubah_nilai', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_guru->ubah_nilai($id);
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('guru/nilai');
        }
    }
    public function Detail_siswa($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Data Siswa";
        $data['siswa'] = $this->m_guru->getsiswabyid($id);
        $data['nil'] = $this->m_guru->get_nilai($id);
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_siswa', $data);
        $this->load->view('template/footer');
    }
    public function aksi_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $file = $this->upload->data('file_name');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('guru/tugas', $data);
        }
    }
    // function cetaksiswa()
    // {
    //     $pdf = new FPDF('P', 'mm', 'A4'); //L = lanscape P= potrait
    //     // membuat halaman baru
    //     $pdf->AddPage();
    //     // setting jenis font yang akan digunakan
    //     $pdf->SetFont('Arial', 'B', 16);
    //     $ya = 44;
    //     // mencetak string 
    //     $pdf->Cell(190, 7, 'SEKOLAH DASAR NEGERI 2 CIBEBER', 0, 1, 'C');
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(190, 7, 'DAFTAR SISWA KELAS VI ', 0, 1, 'C');
    //     // Memberikan space kebawah agar tidak terlalu rapat
    //     $pdf->Cell(10, 7, '', 0, 1);
    //     $pdf->SetFont('Arial', 'B', 10);
    //     $pdf->Cell(20, 6, 'NIS', 1, 0);
    //     $pdf->Cell(85, 6, 'NAMA SISWA', 1, 0);
    //     $pdf->Cell(27, 6, 'KELAS', 1, 0);
    //     // $pdf->Cell(25,6,'TANGGAL LHR',1,1);
    //     $pdf->SetFont('Arial', '', 10);
    //     $data = $this->m_guru->getclass1();
    //     var_dump($data);
    //     die();
    //     foreach ($data as $row) {
    //         $pdf->Cell(20, 6, $row->nis, 1, 0);
    //         $pdf->Cell(85, 6, $row->nama, 1, 0);
    //         $pdf->Cell(27, 6, $row->kelas, 1, 0);
    //         // $pdf->Cell(25,6,$row->tanggal_lahir,1,1); 
    //     }
    //     $pdf->Output();
    // }

    public function Cetakguru()
    {
        $sql = "select * from user where role_id = 3 ";

        $guru[guru] = $this->db->query($sql)->result_array();
        $this->load->view('guru/cetak_guru', $guru);
    }
    public function cek_tugas()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Cek Tugas";
        $data['siswa'] = $this->m_guru->getsiswa();
        $this->load->view('template/header', $data);
        $this->load->view('guru/cektugas', $data);
        $this->load->view('template/footer');
    }
    public function detail_tugas_1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Tugas Kelas 1";
        $data['tugas'] = $this->m_guru->get_tugas1();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_cek_tugas', $data);
        $this->load->view('template/footer');
    }
    public function detail_tugas_2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Tugas Kelas 1";
        $data['tugas'] = $this->m_guru->get_tugas2();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_cek_tugas', $data);
        $this->load->view('template/footer');
    }
    public function detail_tugas_3()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Tugas Kelas 1";
        $data['tugas'] = $this->m_guru->get_tugas3();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_cek_tugas', $data);
        $this->load->view('template/footer');
    }
    public function detail_tugas_4()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Tugas Kelas 1";
        $data['tugas'] = $this->m_guru->get_tugas4();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_cek_tugas', $data);
        $this->load->view('template/footer');
    }
    public function detail_tugas_5()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Tugas Kelas 1";
        $data['tugas'] = $this->m_guru->get_tugas5();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_cek_tugas', $data);
        $this->load->view('template/footer');
    }
    public function detail_tugas_6()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Tugas Kelas 1";
        $data['tugas'] = $this->m_guru->get_tugas6();
        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_cek_tugas', $data);
        $this->load->view('template/footer');
    }
    public function detail_tugas($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama_user'] = $data['user']['nama'];
        $data['judul'] = "Detail Tugas";
        $data['tugas'] = $this->m_guru->detail_tugas($id);

        $this->load->view('template/header', $data);
        $this->load->view('guru/detail_tugas', $data);
        $this->load->view('template/footer');
    }
    public function download_tugas($id)
    {
        $data = $id;
        $name = $id;
        force_download($name, $data);
    }
    public function hapus_tugas($id)
    {
        $this->m_guru->hapus_data($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('guru/tugas');
    }

}