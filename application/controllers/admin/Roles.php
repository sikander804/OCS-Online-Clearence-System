<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {
    function __construct() {
        parent::__construct();
        AdminLoginCheck();
        $this->load->model('Users_model', 'users_model');
        $this->load->model('Roles_model', 'roles_model');
        $this->load->helper('date');
        $this->load->model('Admin_model', 'admin_model');
    }
    
 
    
 public function index(){
      
       $data['users']=$this->users_model->GetAll();
//       $data['roles']=$this->roles_model->GetAll();
//       "<pre>";
//       var_dump($data);
//       exit();
        $data['page_title'] = 'Roles';
        $data['content_view'] = 'admin/roles/listroles';
        $this->load->view('admin/template_new', $data);
 }
 
 
 
 
 
  public function edit_role($id){
      
      $data['roles']=$this->roles_model->GetAll();
      $data['user']=$this->users_model->GetById($id);
      $data['content_view'] = 'admin/roles/edit-role';        
      $data['page_title'] = 'Update Role';
      
      $this->load->view('admin/template_new', $data);              
  }
 
 
     public function update_role($id){         
      $user_id = $this->session->userdata('admin_user_session_id');
      $this->form_validation->set_rules('role_id','Role Name', 'trim|required');
      if($this->form_validation->run()){
          
//          $data['user_id'] = $this->get_post('user_id');
          $data['user_role_id'] = $this->get_post('role_id');
         
//          $res = $this->user_model->Search(array('user_id'=>$data['user_id'],'user_role_id'=>$data['role_id']));
          $result=$this->users_model->Save($data,$id);
          
            if($result)
             {
                _setSuccess('Role Updated Successfully');
                  return redirect('admin/roles/');
             }
             else
             {
                _setError('Error Updating Role');
                return redirect('admin/roles/');;
             }
      }
        
  }
  
  
  public function add_role(){
      $data['roles']=$this->roles_model->GetAll();
      $data['content_view'] = 'admin/roles/add-role';        
      $data['page_title'] = 'Add Role';
      
      $this->load->view('admin/template_new', $data);
  }
  
  
  
    public function save_role(){
       
      $user_id = $this->session->userdata('admin_user_session_id');
      $this->form_validation->set_rules('role_id','Role Name', 'trim|required');
      if($this->form_validation->run()){
          $data['user_role_id'] = $this->get_post('role_id');
          $id = $this->get_post('user_id');
          $data['id'] = $id;
//          echo $id;
//          print_r($data);
//          exit();
          $res = $this->users_model->Search(array('id'=>$id,'user_role_id'=>$data['user_role_id']));
//          print_r($res);
//          exit();
          if(empty($res)){
              $result=$this->users_model->Save($data,$id);
          
              if($result)
               {
                  _setSuccess('Added Role Successfully');
                  return redirect('admin/roles/');
               }
               else
               {
                _setError('Error Adding Role');
                return redirect('admin/roles/');
               }
          }else{
              _setError('Role has already assigned to this member');
                return redirect('admin/roles/');
          }
          
      }         
  }
  
  
  public function delete_role($id){
     
         $result = $this->users_model->Delete($id);
         if($result){
            _setSuccess('Role Deleted Successfully');
         }
         else{
           _setError('Error Deleting Role');
         }
         redirect('admin/roles');
    }
    
    
    
   
}


