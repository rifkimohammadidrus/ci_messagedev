<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kirim_pesan extends CI_Controller
{
  public function __construct()
    {
      parent::__construct();
      is_logged_in();
      $this->load->helper('url');
      $this->load->model('M_member');
      $this->load->library('form_validation');
    }
  public function index()
  { 
    $data['keycodestaff']=$this->session->userdata('keycodestaff');
    $data['secret']=$this->session->userdata('secret');
    $data['nama']=$this->session->userdata('username');
    $data['member']=$this->M_member->getAllMember(); 
    $this->load->view('template/header'); 
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('master/v_kirim_pesan');
    // $this->load->view('template/footer');
  }
  public function sendMessage()
  { 
    $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');
    $this->form_validation->set_rules('nama_member', 'Mama Member', 'required|trim');
    $this->form_validation->set_rules('no_hp', 'no_hp', 'required|trim');
    $msg = $this->input->post('pesan');
    $no_hp = $this->input->post('no_hp');

    $data= $this->M_member->sendMessage($no_hp, $msg);
    redirect('kirim_pesan');
  }
}

