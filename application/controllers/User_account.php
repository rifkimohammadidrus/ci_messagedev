<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_account extends CI_Controller
{
  public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
    }
  public function index()
  { 
    $data['keycodestaff']=$this->session->userdata('keycodestaff');
    $data['secret']=$this->session->userdata('secret'); 
    $data['username']=$this->session->userdata('username'); 
    $data['password']=$this->session->userdata('password'); 
    $data['nama']=$this->session->userdata('username'); 
    $this->load->view('template/header');
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('master/v_user_account');
    $this->load->view('template/footer');
  } 
}