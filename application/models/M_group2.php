<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_group extends CI_Model
{
 
  public function getAllGroup()
  {
    $keycodestaff=$this->session->userdata('keycodestaff');
    $secret=$this->session->userdata('secret');

    $data = new stdClass();
		$data->keyCodeStaff = $keycodestaff;
	 	$data->secret = $secret;

		$dataJSON = json_encode($data);

    // var_dump($dataJSON);
    // die;
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/group',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array("data" => $dataJSON),
    ));
     
    $res = json_decode(curl_exec($curl),true);
    // return $res;
    if ($res['status']==502) {
      
      $this->session->set_flashdata('massage', '<script>alert("Session expired, silahkan login kembali.");</script>');
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

    // var_dump($dataJSON);
    // die;
    $curl = curl_init(); 
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/groupdetail',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array("data" => $dataJSON),
    ));
    
    $res = json_decode(curl_exec($curl),true); 
    if ($res['status']==502) {
      $this->session->set_flashdata('massage', '<script>alert("Session expired, silahkan login kembali.");</script>');
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

    // var_dump($dataJSON);
    // die;
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/addgroup',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('data' => $dataJSON),
    ));
    $response = curl_exec($curl);

    curl_close($curl);
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

    // var_dump($dataJSON);
    // die;
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/addgroupdetail',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('data' => $dataJSON),
    ));
    $response = curl_exec($curl);

    curl_close($curl);
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

    // var_dump($dataJSON);
    // die;
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/editgroup',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('data' => $dataJSON),
    ));
    $response = curl_exec($curl);

    curl_close($curl);
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

    // var_dump($dataJSON);
    // die;
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/deletegroupdetail',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('data' => $dataJSON),
    ));
    $response = curl_exec($curl);

    curl_close($curl);
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

    // var_dump($dataJSON);
    // die;
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/sendgroup',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('data' => $dataJSON),
    ));
    $response = curl_exec($curl);

    curl_close($curl);
  }

}
