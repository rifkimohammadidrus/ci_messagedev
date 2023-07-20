<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_wha extends CI_Controller
{
  public function __construct()
    {
        parent::__construct();
        is_logged_in();
        error_reporting(0);
        $this->load->helper('url'); 
        $this->load->model('M_member');
    }
  public function index()
  {
    $data['nama']=$this->session->userdata('username');
    $data['member']=$this->M_member->getAllMember(); 
    $this->load->view('template/header');
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('master/v_member_wha', $data); 
    
  } 
}