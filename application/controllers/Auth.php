<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');

    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Message Dev | Login'; 
            $this->load->view('auth/login'); 
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
       
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://rsys.systems/back_end/microservices/wha/apiauth',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('username' => $username,'password' => $password),
          ));

        $response = json_decode(curl_exec($curl),true);
      
        if ($response['data']) {
            foreach ($response['data'] as $key) {
                 
                $data = [
                    'keycodestaff' => $key['keycodestaff'],
                    'secret' => $key['secret'],
                    'username'=>$key['username'],
                    'password'=>$password
                    
                ];
                $this->session->set_userdata($data);
                redirect('dashboard'); // controller dashboard
                    
            }
        }else{
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
                    Username or password is fail!
                </div>');
                    redirect('auth');
        } 
    }

 
    public function logout()
    {
        $this->session->unset_userdata('keycodestaff');
        $this->session->set_flashdata('massage', '<div class="alert alert-info" role="alert">
            You have been logout!
          </div>');
        redirect('auth');
    }
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
