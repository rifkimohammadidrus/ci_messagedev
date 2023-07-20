<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_member extends CI_Model
{
  public function __construct()
    {
      parent::__construct(); 
      $this->load->model('Curl'); 
    }
  public function getAllMember()
  {
    $this->load->library('session');
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret; 
		$dataJSON = json_encode($data);

    $url='member';
    $curl = curl_init();
    $options = $this->Curl->postCurl($url, $dataJSON); 
    curl_setopt_array($curl, $options);    
    $response = json_decode(curl_exec($curl),true);

    if ($response['status']==502) { 
      $this->session->set_flashdata('error', 'Sesion Expired!');
      unset(
        $_SESSION['keycodestaff'],
        $_SESSION['secret']
      );
      redirect('auth');
    }else{
      return $response['data']; 
    } 
  }

  public function sendMessage($no_hp, $msg){  
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret; 

    $data->phone = $no_hp;
    $data->msg = $msg;
    $dataJSON = json_encode($data); 
    $url='sendwha';
    $curl = curl_init();
    $options = $this->Curl->postCurl($url, $dataJSON); 
    curl_setopt_array($curl, $options);    
    $response = json_decode(curl_exec($curl),true);  
    if ($response['status']==502) {
      $this->session->set_flashdata('error','Action Not Completed'); 
    }else{
      $this->session->set_flashdata('success','Action Completed');
    }  
  } 
}
