<?php
class Jadwal extends CI_controller
{
    public function __Construct ()
    {
   parent :: __construct();
   
   $this -> load -> model ('m_jadwal');
   $this-> load->library('form_validation');
    }

    public function index ()
    
        {
            $data ['judul'] ='Jadwal Mata Pelajaran';
            $data['jadwalsenin'] = $this -> m_jadwal -> getjadwalbyclass1();
            // $data['jadwalselasa'] = $this -> m_jadwal -> getjadwalbyclass2();
            $this -> load -> view ('template/header',$data);
            $this -> load -> view ('jadwal/index',$data);
            $this -> load -> view ('template/footer');
        }

     public function satu()
    {
        $data['judul'] = "Detail Data kelas 1";
        $data['kelas'] = $this -> m_siswa -> getsiswabyclass1();
        $this -> load -> view('template/header',$data);
        $this -> load -> view('kelas/satu',$data);
        $this -> load -> view('template/footer');
    }
    public function dua()
    {
        $data['judul'] = "Detail Data Kelas 2";
        $data['kelas'] = $this -> m_siswa -> getsiswabyclass2();
        $this -> load -> view('template/header',$data);
        $this -> load -> view('kelas/dua',$data);
        $this -> load -> view('template/footer');
    }
    public function tiga()
    {
        $data['judul'] = "Detail Data Kelas 3";
        $data['kelas'] = $this -> m_siswa -> getsiswabyclass3();
        $this -> load -> view('template/header',$data);
        $this -> load -> view('kelas/tiga',$data);
        $this -> load -> view('template/footer');
    }

    public function empat()
    {
        $data['judul'] = "Detail Data Kelas 4";
        $data['kelas'] = $this -> m_siswa -> getsiswabyclass4();
        $this -> load -> view('template/header',$data);
        $this -> load -> view('kelas/empat',$data);
        $this -> load -> view('template/footer');
    }

    public function lima()
    {
        $data['judul'] = "Detail Data Kelas 5";
        $data['kelas'] = $this -> m_siswa -> getsiswabyclass5();
        $this -> load -> view('template/header',$data);
        $this -> load -> view('kelas/lima',$data);
        $this -> load -> view('template/footer');
    }
    
    public function enam()
    {
        $data['judul'] = "Detail Data Kelas 6";
        $data['kelas'] = $this -> m_siswa -> getsiswabyclass6();
        $this -> load -> view('template/header',$data);
        $this -> load -> view('kelas/enam',$data);
        $this -> load -> view('template/footer');
    }
}