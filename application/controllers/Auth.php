<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('auth/welcome');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'halaman Login';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) // CEK PASSWORD
                {
                    $data = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    if ($user['role_id'] == 1) {
                        $this->session->set_userdata($data);
                        redirect('Admin/index');
                    } else if ($user['role_id'] == 2) {
                        $this->session->set_userdata($data);
                        redirect('siswa/index');
                    } else {
                        $this->session->set_userdata($data);
                        redirect('guru/index');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger
                                " role="alert">Password Salah !</div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger
                    " role="alert">Email Belum Teraktivasi</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger
                " role="alert">Email Tidak Terdaftar</div>');
            redirect('auth/login');
        }
    }


    public function registration()
    {
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
            $data['judul'] = 'halaman Registrasi';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth_footer');
        } else {
            $this->m_auth->tambahuser();
            $this->session->set_flashdata('message', '<div class="alert alert-success
            " role="alert">Selamat Registrasi Berhasil. Silahkan Login</div>');
            redirect('auth/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success
        " role="alert">Anda Telah Logout Silahkan Login Kembali</div>');
        redirect('auth/login');
    }
}
