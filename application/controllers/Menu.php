<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_Model');
    }

    public function index()
    {
        $data['title'] = 'User Access Menu';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['menu'] = 'Menu Manajemen';
        $data['data'] = $this->Toko_Model->getRoleAccess();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/user-access', $data);
        $this->load->view('templates/footer');
    }
    public function menu()
    {
        $data['menu'] = 'Menu Manajemen';
        $data['title'] = 'Menu';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Toko_Model->getAll('user_menu');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/user-menu', $data);
        $this->load->view('templates/footer');
    }
    public function subMenu()
    {
        $data['menu'] = 'Menu Manajemen';
        $data['title'] = 'Sub Menu';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata['username']])->row_array();
        $data['data'] = $this->Toko_Model->getUserSubMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/user-subMenu', $data);
        $this->load->view('templates/footer');
    }
}
