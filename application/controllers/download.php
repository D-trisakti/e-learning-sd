<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'download'));
    }
    public function download_files($id)
    {
        $data['tugas'] = $this->m_guru->detail_tugas($id);
        $nama_file = $tugas['file'];
        force_download('$nama_file', null);
    }

}