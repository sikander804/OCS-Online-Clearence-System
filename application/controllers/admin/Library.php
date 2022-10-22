<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {
    function __construct() {
        parent::__construct();
        AdminLoginCheck();
        $this->load->model('Forms_model', 'form_model');
        $this->load->model('Departments_model', 'department_model');
        $this->load->helper('date');
        $this->load->model('Admin_model', 'admin_model');
        $this->load->model('Sports_model', 'sports_model');
        $this->load->model('Library_model', 'library_model');
    }
    
 
    
 public function index(){
      
        $data['forms']=$this->library_model->GetAll();
       
        $data['page_title'] = 'List Library Forms';
        $data['content_view'] = 'admin/library/list_library';
        $this->load->view('admin/template_new', $data);
 }
 
 public function approve_form($id){
      $form = $this->library_model->GetById($id);
      
      $is_approved = $this->library_model->Search(array('form_id'=>$form->form_id,'dept_id'=>$form->dept_id,'user_id'=>$form->user_id,'status'=>'approve'));
      if(empty($is_approved)){
        $data['form'] = $form;
        $data['content_view'] = 'admin/library/approve-form';        
        $data['page_title'] = 'Approve Form';
        $this->load->view('admin/template_new', $data); 
      }else{
          _setError('Form Is Already Approved');
         return redirect('admin/library');
          exit();
      }
       
    }
    
    public function disapprove_form($id){
      $form = $this->library_model->GetById($id);
      
      $is_disapproved = $this->library_model->Search(array('form_id'=>$form->form_id,'dept_id'=>$form->dept_id,'user_id'=>$form->user_id,'status'=>'disapprove'));
      if(empty($is_disapproved)){
        $data['form'] = $form;
        $data['content_view'] = 'admin/library/disapprove-form';        
        $data['page_title'] = 'Dispprove Form';
        $this->load->view('admin/template_new', $data); 
      }else{
          _setError('Form Is Already Dispproved');
         return redirect('admin/library');
          exit();
      }
       
    }
 
 
 
  public function edit_form($id){
      $data['depts'] = $this->department_model->GetAll();
      $data['edit_form']=$this->library_model->GetById($id);
      
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
          
            $result=$this->library_model->Save($data,$id);
          
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
      $data['depts'] = $this->library_model->GetAll();
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
          
          
          $result=$this->library_model->Save($data);
          
              if($result)
               {
                  _setSuccess('Form Added Successfully');
                  return redirect('admin/forms/');
               }
               else
               {
                 _setError('Error Adding Form');
                 return redirect('admin/library/');
               }
      }         
  }
  
  
  
  public function save_approved_form($id){
       
//        $user_id = $this->session->userdata('admin_user_session_id');
      
        $data['dept_id'] = $this->input->post('dept_id');
        $data['form_id'] = $this->input->post('form_id');
        $data['status'] = 'approve';
        $data['description'] = $this->input->post('description');
        $data['user_id'] = $this->input->post('user_id');
//        echo "<pre>";
//        print_r($data);
//        exit();
        $is_approved = $this->library_model->Search(array('form_id'=>$data['form_id'],'dept_id'=>$data['dept_id'],'user_id'=>$data['user_id'],'status'=>'approve'));
        if(empty($is_approved)){
            
           $result=$this->library_model->Save($data,$id);
            if($result)
             {
                $data_lib['form_id'] = $data['form_id'];
                $data_lib['dept_id'] = $data['dept_id'];
                $data_lib['user_id'] = $data['user_id'];
                $is_available = $this->sports_model->Search(array('form_id'=>$data_lib['form_id'],'dept_id'=>$data_lib['dept_id'],'user_id'=>$data_lib['user_id']));
                if(empty($is_available)){
                  $this->sports_model->Save($data_lib);  
                }
//                
                
                _setSuccess('Form Approved Successfully');
               
             }
             else
             {
               _setError('Error Approving Form');
               
             } 
        }else{
            _setError('Already Approved');
        }
        return redirect('admin/library/');
        exit();
      }         
    
      
      
    public function save_disapproved_form($id){
       
//        $user_id = $this->session->userdata('admin_user_session_id');
      
        $data['dept_id'] = $this->input->post('dept_id');
        $data['form_id'] = $this->input->post('form_id');
        $data['status'] = 'disapprove';
        $data['description'] = $this->input->post('description');
        $data['user_id'] = $this->input->post('user_id');
//        echo "<pre>";
//        print_r($data);
//        exit();
        $is_disapproved = $this->library_model->Search(array('form_id'=>$data['form_id'],'dept_id'=>$data['dept_id'],'user_id'=>$data['user_id'],'status'=>'disapprove'));
        if(empty($is_disapproved)){
            
           $result=$this->library_model->Save($data,$id);
            if($result)
             {
//                $data_lib['form_id'] = $data['form_id'];
//                $data_lib['dept_id'] = $data['dept_id'];
//                $data_lib['user_id'] = $data['user_id'];
                
//                $is_exists = $this->library_model->Search(array('form_id'=>$data_lib['form_id'],'dept_id'=>$data_lib['dept_id'],'user_id'=>$data_lib['user_id']));
//                if(!empty($is_exists)){
//                    $is_exists = $is_exists[0];
////                    echo "<pre>";
////                    print_r($is_exists[0]->id);
////                    exit();
////                    $this->library_model->DeleteForm($data_lib);
//                }
                
                _setSuccess('Form Dispproved Successfully');
               
             }
             else
             {
               _setError('Error Dispproving Form');
               
             } 
        }else{
            _setError('Already Dispproved');
        }
        return redirect('admin/library/');
        exit();
      }
  
      public function show_approved_forms(){
        $forms = $this->library_model->GetApprovedForms();
        $data['forms'] = $forms;
        $data['content_view'] = 'admin/library/show-approved-forms';        
        $data['page_title'] = 'Approved Forms';
        $this->load->view('admin/template_new', $data); 
    }
      public function show_disapproved_forms(){
        $forms = $this->library_model->GetDispprovedForms();
        $data['forms'] = $forms;
        $data['content_view'] = 'admin/library/show-disapproved-forms';        
        $data['page_title'] = 'Disapproved Forms';
        $this->load->view('admin/template_new', $data); 
    }
  
  
  
  public function delete_form($id){
     
         $result = $this->form_model->Delete($id);
         if($result){
            _setSuccess('Form Deleted Successfully');
         }
         else{
           _setError('Error Deleting Role');
         }
         redirect('admin/library');
    }
    
    
    
   
}


