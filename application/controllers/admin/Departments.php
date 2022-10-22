<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller {
    function __construct() {
        parent::__construct();
        AdminLoginCheck();
        $this->load->model('Departments_model', 'department_model');
//        $this->load->model('Roles_model', 'roles_model');
        $this->load->helper('date');
        $this->load->model('Admin_model', 'admin_model');
    }
    
 
    
 public function index(){
      
        $data['departments']=$this->department_model->GetAll();
       

        $data['page_title'] = 'Department';
        $data['content_view'] = 'admin/departments/list_departments';
        $this->load->view('admin/template_new', $data);
 }
 
 
 
 
 
  public function edit_department($id){
       
      $data['edit_department']=$this->department_model->GetById($id);
      $data['content_view'] = 'admin/departments/edit_department';        
      $data['page_title'] = 'Update Department';
      
      $this->load->view('admin/template_new', $data);              
  }
 
 
     public function update_department($id){         
      $user_id = $this->session->userdata('admin_user_session_id');
      $this->form_validation->set_rules('name','Name', 'trim|required');
      if($this->form_validation->run()){
          $user_id = $this->get_post('user_id');
          $data['name'] = $this->get_post('name');
          if(!empty($user_id)){
              $data['dept_chairman_id'] = $user_id;
          }
            $result=$this->department_model->Save($data,$id);
          
            if($result)
             {
                _setSuccess('Department Updated Successfully');
                  return redirect('admin/departments/');
             }
             else
             {
                _setError('Error Updating Department');
                return redirect('admin/departments/');;
             }
      }
        
  }
  
  
  public function add_department(){
      $data['content_view'] = 'admin/departments/add_department';        
      $data['page_title'] = 'Add Department';
      
      $this->load->view('admin/template_new', $data);
  }
  
  
  
    public function save_department(){
       
      $user_id = $this->session->userdata('admin_user_session_id');
      $this->form_validation->set_rules('name','Name', 'trim|required');
      if($this->form_validation->run()){
          $data['dept_chairman_id'] = $this->get_post('user_id');
          $data['name'] = $this->get_post('name');
          $data['status'] = 1;
          $result=$this->department_model->Save($data);
          
              if($result)
               {
                  _setSuccess('Department Added Successfully');
                  return redirect('admin/departments/');
               }
               else
               {
                _setError('Error Adding Department');
                return redirect('admin/departments/');
               }
      }         
  }
  
  
  public function delete_department($id){
     
         $result = $this->department_model->Delete($id);
         if($result){
            _setSuccess('Department Deleted Successfully');
         }
         else{
           _setError('Error Deleting Role');
         }
         redirect('admin/departments');
    }
    
    
    
   
}


