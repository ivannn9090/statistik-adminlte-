<?php

class Tambah extends CI_Controller{
    public function tambah()
    {
        $data['title'] = 'from tambah data nilai mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('statisti/mahasiswa/tambah');
        $this->load->view('templates/footer');
    }
}