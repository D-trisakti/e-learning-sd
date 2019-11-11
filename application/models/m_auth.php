<?php
class m_auth extends CI_Model
{
    public function tambahuser()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'Email' => htmlspecialchars($this->input->post('Email', true)),
            'nis' => htmlspecialchars($this->input->post('nis', true)),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('user', $data);
    }
}
