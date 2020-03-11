<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_Model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('flash', 'Akses Di Block');
            redirect('auth');
        }
    }

    public function bangunan()
    {
        $data['title'] = 'Alat Bangunan';
        $data['menu'] = 'Barang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata['username']])->row_array();
        $data['barang'] = $this->Toko_Model->getAllByKatalog('bangunan');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('barang/alat-bangunan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahProduk()
    {
    }
}
