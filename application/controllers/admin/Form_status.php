<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_status extends CI_Controller {
    function __construct() {
        parent::__construct();
        AdminLoginCheck();
        $this->load->model('Forms_model', 'form_model');
        $this->load->model('Departments_model', 'department_model');
        $this->load->helper('date');
        $this->load->model('Admin_model', 'admin_model');
    }
    
 
    
 public function index(){
      
        $data['forms']=$this->form_model->GetAll();
       
        $data['page_title'] = 'Forms';
        $data['content_view'] = 'admin/forms/listforms';
        $this->load->view('admin/template_new', $data);
 }
 
 
 
 
 
  public function edit_form($id){
      $data['depts'] = $this->department_model->GetAll();
      $data['edit_form']=$this->form_model->GetById($id);
      
      $data['content_view'] = 'admin/forms/edit-form';        
      $data['page_title'] = 'Update Form';
      $this->load->view('admin/template_new', $data);              
  }
 
 
     public function update_form($id){         
      $user_id = $this->session->userdata('admin_user_session_id');
      $this->form_validation->set_rules('dept_id','Deparment Name', 'trim|required');
      if($this->form_validation->run()){
          $data['dept_id'] = $this->get_post('dept_id');
          $data['form_status'] = 1;
          $data['updated_by'] = $user_id;
          
            $result=$this->form_model->Save($data,$id);
          
            if($result)
             {
                _setSuccess('Form Updated Successfully');
                  return redirect('admin/forms/');
             }
             else
             {
                _setError('Error Updating Form');
                return redirect('admin/forms/');;
             }
      }
        
  }
  
  
  public function add_form(){
      $data['depts'] = $this->department_model->GetAll();
      $data['content_view'] = 'admin/forms/add-form';        
      $data['page_title'] = 'Add Form';
      
      $this->load->view('admin/template_new', $data);
  }
  
  
  
    public function save_form(){
       
      $user_id = $this->session->userdata('admin_user_session_id');
      $this->form_validation->set_rules('dept_id','Deparment Name', 'trim|required');
      if($this->form_validation->run()){
          $data['dept_id'] = $this->get_post('dept_id');
          $data['form_status'] = 1;
          $data['added_by'] = $user_id;
          
          
          $result=$this->form_model->Save($data);
          
              if($result)
               {
                  _setSuccess('Form Added Successfully');
                  return redirect('admin/forms/');
               }
               else
               {
                 _setError('Error Adding Form');
                 return redirect('admin/forms/');
               }
      }         
  }
  
  
  public function delete_form($id){
     
         $result = $this->form_model->Delete($id);
         if($result){
            _setSuccess('Form Deleted Successfully');
         }
         else{
           _setError('Error Deleting Role');
         }
         redirect('admin/forms');
    }
    
    
    
   
}


