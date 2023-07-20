<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
  public function __construct()
    {
      parent::__construct();
      is_logged_in();
      $this->load->helper('url');
      $this->load->model('M_history');
      $this->load->library('form_validation');
    }
  public function index()
  { 
    $data['keycodestaff']=$this->session->userdata('keycodestaff');
    $data['secret']=$this->session->userdata('secret');
    $data['nama']=$this->session->userdata('username');
    $data['history']=$this->M_history->getHistory(); 
    $this->load->view('template/header'); 
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('master/v_history');
    // $this->load->view('template/footer');
  } 
}

