<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {
    function __construct() {
        parent::__construct();
        AdminLoginCheck();
        $this->load->model('Users_model', 'user_model');
        $this->load->model('Admin_model', 'admin_model');
    }
    
 
    
 public function index(){
      
     
        $data['page_title'] = 'Change Password';
        $data['content_view'] = 'admin/change-password';        
        $this->load->view('admin/template_new', $data); 
 }
 
     public function update_password(){         
         
         $current_password = $this->get_post('current_password');
         $new_password = $this->get_post('new_password');
         $confirm_password = $this->get_post('confirm_password');
         if($new_password!=$confirm_password){
             _setError('Your Passwrod and confirm pass are not Matched!');
            redirect(site_url('admin/change_password'));
            exit();
         }
         
         $pdata['pwd'] = encrypt_password($current_password);         
         $getadmin = $this->admin_model->Search($pdata);
         
         if(isset($getadmin[0]->id) && $getadmin[0]->id>0){
             $savedata['pwd'] = encrypt_password($new_password);
             $getadmin = $this->admin_model->Save($savedata, $getadmin[0]->id);
             _setSuccess('Your Password has been updated!');
         }else{
             _setError('Your Current Password is not Matched!');
         }
         
         redirect(site_url('admin/change_password'));
         exit();
        
  }
   
}


