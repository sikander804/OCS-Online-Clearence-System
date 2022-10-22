<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    function __construct() {
        parent::__construct();
        AdminLoginCheck();
        $this->load->model('Users_model', 'users_model');
        $this->load->helper('date');
        $this->load->model('Admin_model', 'admin_model');
    }
    
 
    
 public function index(){
      
       $data['users']=$this->users_model->GetAll();
//       "<pre>";
//       var_dump($data['countries_details']);
//       exit();
        $data['page_title'] = 'Users';
        $data['content_view'] = 'admin/users/listusers';
        $this->load->view('admin/template_new', $data);
 }
 
 
 
 
 
  public function edit_user($id){
       
      $data['edit_user']=$this->users_model->GetById($id);
      $data['content_view'] = 'admin/users/edit-user';        
      $data['page_title'] = 'Update User';
      
      $this->load->view('admin/template_new', $data);              
  }
 
 
     public function update_user($id){         
      $user_id = $this->session->userdata('admin_user_session_id');
      $this->form_validation->set_rules('full_name','Full Name', 'trim|required');
      $this->form_validation->set_rules('username','Username', 'trim|required');
      $this->form_validation->set_rules('email','User Email', 'trim|required');
      if($this->form_validation->run()){
          $data['full_name'] = $this->get_post('full_name');
          $username = $this->get_post('username');
          $data['email'] = $this->get_post('email');
          $data['student_status'] = $this->get_post('student_status');
          
//          print_r($is_true);
//          exit();
          

          $data['father_name'] = $this->get_post('father_name');

          $password = $this->get_post('password');
          if(isset($username)){
              $data['username'] = $username;
          }
          if(isset($email)){
              $data['email'] = $email;
          }
          
          if($password != ''){
              $data['password'] = encrypt_password($password);
          }
          
          $result=$this->users_model->Save($data,$id);
          
            if($result)
             {
                $this->session->set_flashdata('message','The Data Has Been UPDATED Successfully');
                return redirect('admin/users/');
             }
             else
             {
                $data_error=['error'=>validation_errors()];
                $this->session->set_flashdata($data_error);
                return redirect('admin/users/');
             }
      }
        
  }
  
  
  public function add_user(){
      $data['content_view'] = 'admin/users/add-user';        
      $data['page_title'] = 'Add User';
      
      $this->load->view('admin/template_new', $data);
  }
  
  
  
    public function save_user(){
       
      $user_id = $this->session->userdata('admin_user_session_id');
      $this->form_validation->set_rules('full_name','Full Name', 'trim|required');
//      $this->form_validation->set_rules('username','User Name', 'trim|required');
//      $this->form_validation->set_rules('email','Email', 'trim|required');
//      $this->form_validation->set_rules('password','Password', 'trim|required');
//      $this->form_validation->set_rules('user_status','Status', 'trim|required');
      if($this->form_validation->run()){
          $data['full_name'] = $this->get_post('full_name');
          $username = $this->get_post('username');
          $email = $this->get_post('email');
          $password = $this->get_post('password');
          $data['father_name'] = $this->get_post('father_name');
          $data['student_status'] = $this->get_post('student_status');
          
          if($email != ''){
                      $is_true = $this->users_model->Search(array('email'=>$email));
//          print_r($is_true);
//          exit();
          if(!empty($is_true)){
              _setError('User Already Registered with this email');
              redirect('admin/users/add_user');
              exit();
          }  
          }

          
//          $data['status'] = $this->get_post('user_status');
//          $data['created_on'] = date('Y-m-d H:i:s');
//          $data['created_by'] = $user_id;
          if(isset($username)){
              $data['username'] = $username;
          }
          if(isset($email)){
              $data['email'] = $email;
          }
          if(isset($password)){
              $data['password'] = encrypt_password($password);
          }
          
          
          
          
          $result=$this->users_model->Save($data);
          
              if($result)
               {
                $this->session->set_flashdata('message','The Data Has Been Added Successfully');
                return redirect('admin/users/');
               }
               else
               {
                $data_error=['error'=>validation_errors()];
                $this->session->set_flashdata($data_error);
                return redirect('admin/users/');
               }
      }         
  }
  
  
  public function userList(){
  
    $postData = $this->input->post();
    $data = $this->users_model->getUsers($postData);

    echo json_encode($data);
  }
  
  
  public function delete_user($id){
     
         $result=$this->users_model->Delete($id);
         if($result){
            $this->session->set_flashdata('deleted','your data has been deleted');
         }
         else{
          echo "the data is not deleted";
         }
         redirect('admin/users');
    } 
   
}


