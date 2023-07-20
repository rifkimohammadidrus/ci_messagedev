<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_group extends CI_Model
{ 
  public function __construct()
    {
      parent::__construct(); 
      $this->load->model('Curl'); 
    } 

  public function getAllGroup()
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret; 
		$dataJSON = json_encode($data); 

    $url='group';
    $curl = curl_init();
    $options = $this->Curl->postCurl($url, $dataJSON);  
    curl_setopt_array($curl, $options);  
    $res = json_decode(curl_exec($curl),true);
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
  public function getGroupById($id)
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');
    $groupId=$id; 
    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret;
    $data->idgroup=$groupId;
		$dataJSON = json_encode($data);

    $url='groupdetail';
    $curl = curl_init();
    $options = $this->Curl->postCurl($url, $dataJSON);  
    curl_setopt_array($curl, $options);    
    $res = json_decode(curl_exec($curl),true); 
    if ($res['status']==502) { 
      $this->session->set_flashdata('error', 'Sesion Expired!');
      unset(
        $_SESSION['keycodestaff'],
        $_SESSION['secret']
      );
      redirect('auth');
    }else if ($res['status']=='fail'){
      return array();
    }else{
      return $res['data'];
    }  
  }

  public function insertGroup($groupName)
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret;
    $data->namagrup=$groupName;
		$dataJSON = json_encode($data);

    $url='addgroup';
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
  public function insertMemberGroup($no_hp, $groupId)
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret;
    $data->no_hp=$no_hp;
    $data->id_group=$groupId;
		$dataJSON = json_encode($data);

    $url='addgroupdetail';
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

  public function editGroup($groupId, $groupName, $status)
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret;
    $data->id_group=$groupId;
    $data->namagrup=$groupName;
    $data->status=$status;
		$dataJSON = json_encode($data);
    $url='editgroup';
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
  public function deleteGroupMember($no_hp, $groupId)
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret;
    $data->no_hp=$no_hp;
    $data->id_group=$groupId; 
		$dataJSON = json_encode($data);

    $url='deletegroupdetail';
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
  public function sendGroupMessage($pesan, $groupId)
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret;
    $data->msg=$pesan;
    $data->id_group=$groupId; 
		$dataJSON = json_encode($data);

    $url='sendgroup';
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
