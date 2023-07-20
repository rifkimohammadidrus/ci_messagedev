<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Group_wha extends CI_Controller
{
  public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('M_group');
        $this->load->model('M_member');
        $this->load->library('form_validation');
    }
  public function index()
  { 
    $data['nama']=$this->session->userdata('username');
    $data['group']=$this->M_group->getAllGroup();
    
    $this->load->view('template/header');
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('master/v_group_wha', $data);
    // $this->load->view('template/footer');
  } 

  public function detail($id)
  {
    $data['keycodestaff']=$this->session->userdata('keycodestaff');
    $data['secret']=$this->session->userdata('secret');

    $group_id = decrypt_url($id);
    $data['nama']=$this->session->userdata('username');
    $data['group']= $this->M_group->getGroupById($group_id); 

    $data['member']=$this->M_member->getAllMember();
      
    $this->load->view('template/header');
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('master/v_group_wha_detail', $data); 
  }

  public function add()
  {
    $this->form_validation->set_rules('groupName', 'Nama Group', 'required|trim');
    $groupName = $this->input->post('groupName');
    $this->M_group->insertGroup($groupName); 
    redirect('group_wha');
  }
  
  public function edit()
  {
    $this->form_validation->set_rules('groupName', 'Nama Group', 'required|trim');
    $this->form_validation->set_rules('status', 'Status', 'required|trim');
    $groupName = $this->input->post('groupName');
    $groupId = $this->input->post('groupId');
    $status = $this->input->post('status');
    $this->M_group->editGroup($groupId, $groupName, $status); 
    redirect('group_wha');
  }

  public function addMemberGroup()
  {
    $this->form_validation->set_rules('no_hp', 'no_hp', 'required|trim');
    $this->form_validation->set_rules('nama_member', 'nama_member', 'required|trim');
    $groupId = $this->input->post('groupId');
    $no_hp = $this->input->post('no_hp'); 
    $this->M_group->insertMemberGroup($no_hp, $groupId); 
    redirect('group_wha/detail/'. encrypt_url($groupId));
  }
  public function deleteMember()
  {  
    $no_hp = $this->input->post('no_hp');
    $groupId = $this->input->post('groupId');
    $this->M_group->deleteGroupMember($no_hp, $groupId); 
    redirect('group_wha/detail/'. encrypt_url($groupId));
  }
  public function send()
  {
    $this->form_validation->set_rules('pesan', 'Pesan Group', 'required|trim');
    $pesan = $this->input->post('pesan');
    $groupId = $this->input->post('groupId');
    $this->M_group->sendGroupMessage($pesan, $groupId); 
    redirect('group_wha');
  }

}