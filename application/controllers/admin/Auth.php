<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct() {
        parent::__construct();  
        $this->current_lang_code = $this->session->userdata('current_lang_code');
        $this->current_lang = $this->session->userdata('current_lang');
    }

    public function index() {
 
             $data['page_name'] = 'Login';
             $this->load->view('admin/login-template',$data);
    }
    
    public function login(){
        $this->load->model('Admin_model', 'admin_model');
        $this->load->model('Roles_model', 'roles_model');
        
        $user_name = trim($this->get_post('user_name'));
        $password = $this->get_post('password');
        
        $this->form_validation->set_rules('user_name', 'Usernname', 'required');         
        $this->form_validation->set_rules('password', 'Password', 'required');         
        if ($this->form_validation->run() == FALSE){
            $data['page_name'] = 'Login';
            $this->load->view('admin/login-template',$data);
        }
        else
        {
            $user_password = encrypt_password($password);
          
            $user_id = $this->admin_model->validate(array('username' => $user_name, 'password' => $user_password));
//            echo $user_id;
//            exit();
            if($user_id>0){
                
                $this->session->set_userdata('admin_user_session_id',$user_id);
                redirect(site_url('admin/Dashboard'));
                exit();
            }else{
                _setError('Invalid Username & Password');
                redirect(site_url('admin'));
                exit();
            }
        }
    }
    
    public function logout()
    {   
        $this->session->unset_userdata('admin_user_session_id');            
        redirect("admin/login");
    }
}


