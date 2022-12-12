<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu1 extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $data['title'] = 'Tutorial';
        $data['user'] = $this->db->get_where('user',['email'=>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu1/index', $data);
        $this->load->view('templates/footer');
    }
}