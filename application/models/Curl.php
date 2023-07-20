<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Curl extends CI_Model
{ 
  function postCurl($url, $dataJSON){
    $options = array(
      CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/'.$url,
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
    );
    return $options; 
  }
}

