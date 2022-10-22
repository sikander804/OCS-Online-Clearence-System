<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {
    function __construct() {
        parent::__construct();  
        $this->current_lang_code = $this->session->userdata('current_lang_code');
        $this->current_lang = $this->session->userdata('current_lang');
        $this->load->model('Admin_model', 'admin_model');

    }

    public function index() {
         
        $data['page_name'] = 'Forgot Password';
        $this->load->view('admin/forgot-pass',$data);
    }
    
    public function email($to, $subject, $messageText){      
        
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com', //
            'smtp_port' => 465,        
            'smtp_user' => SMTP_USER, //
            'smtp_pass' => SMTP_PASSWORD, //
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE,
            'newline' => '\r\n'
        );   
    
        $this->load->library("email",$config);
        $this->email->from('texasmarine7@gmail.com','TexasMarine');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($messageText);
        if($this->email->send()) {      
            return 1;
        } else {
            show_error($this->email->print_debugger());      
        }
    }
    
    public function forgot_pass(){
        $username = $this->get_post('user_name');
        $email = $this->get_post('user_email');
        $data['email'] = $email;
        $result = $this->admin_model->Search($data);
//        print_r($result);
//        exit();
        if(isset($result[0]->id) && $result[0]->id>0){
          if($username != $result[0]->username){
            _setError('The Provided Username Is Incorrect');
            redirect(site_url('admin/forgot_password'));
            exit();
          }else{
            $name = $result[0]->full_name;
            $id = $result[0]->id;
            $data['id'] = $id;
            $data['name'] = $name;
            $this->load->view('admin/reset_pass',$data);
           
          }
  
        }else{
            _setError('The Provided Email/username Is Incorrect');
             redirect(site_url('admin/forgot_password'));
             exit();
        }
    
    }
    
    public function verify(){
        $data['page_name'] = 'Reset Password';
        $this->load->view('admin/verify',$data);
    }
    public function reset_admin_password(){
        $v_code = $this->get_post('v_code');
        $getadmin['m_verification'] = $v_code;
    
        $result = $this->admin_model->Search($getadmin);
       

        if(isset($result[0]->admin_user_id) && $result[0]->admin_user_id>0){
             $data['id'] = $result[0]->admin_user_id;
             $data['page_name'] = 'Reset Password';
             $this->load->view('admin/reset_pass',$data);
        }else{
            _setError('Invalid Verfication Code');
            redirect(site_url('admin/forgot_password/verify'));
        }
        
      

    }
    
    public function reset($id){
         $new_password = $this->get_post('new_password');
         $confirm_password = $this->get_post('confirm_password');
         if($new_password!=$confirm_password){
             _setError('Your Passwrod and confirm pass are not Matched!');
            redirect(site_url('admin/forgot_password/reset_pass'));
            exit();
         }
         $udata['password'] = encrypt_password($new_password);
         
         $result = $this->admin_model->Save($udata,$id);
         
         if($result > 0){
             _setSuccess('Your password has been reset');
             redirect(site_url('admin/login'));
         }else{
             _setError('You cannot reset password');
             redirect(site_url('admin/forgot_password/verify_code'));
         }
         

             
    }

    
    
}


