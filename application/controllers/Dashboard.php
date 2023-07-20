<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
    }
  public function index()
  {
      // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['nama']=$this->session->userdata('username');
      $this->load->view('template/header');
      $this->load->view('template/navbar', $data);
      $this->load->view('template/sidebar');
      $this->load->view('master/index');
      $this->load->view('template/footer');
  }

}