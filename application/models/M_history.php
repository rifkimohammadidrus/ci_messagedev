<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_history extends CI_Model
{ 
  public function __construct()
    {
      parent::__construct(); 
      $this->load->model('Curl'); 
    } 

  public function getHistory()
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret; 
		$dataJSON = json_encode($data); 

    $url='whasendview';
    $curl = curl_init();
    $options = $this->Curl->postCurl($url, $dataJSON);  
    curl_setopt_array($curl, $options);  
    $res = json_decode(curl_exec($curl),true);

    // var_dump($res);
    // die;
    if ($res['status']==502) { 
      $this->session->set_flashdata('error', 'Sesion Expired!');
        unset(
          $_SESSION['keycodestaff'],
          $_SESSION['secret']
      );
      redirect('auth');
    }else{
      return $res['data']; 
    } 
  }
}