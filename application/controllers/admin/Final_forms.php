<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Final_forms extends CI_Controller {
    function __construct() {
        parent::__construct();
        AdminLoginCheck();
        $this->load->model('Forms_model', 'form_model');
        $this->load->model('Departments_model', 'department_model');
        $this->load->model('Department_forms_model', 'department_form_model');
        $this->load->helper('date');
        $this->load->model('Admin_model', 'admin_model');
        $this->load->model('Sports_model', 'sports_model');
        $this->load->model('Final_form_model', 'final_form_model');
        $this->load->model('Library_model', 'library_model');
        $this->load->model('Provost_model', 'provost_model');
    }
    
 
    
 public function index(){
        
        $data['forms']=$this->final_form_model->GetAll();
        $data['page_title'] = 'List Final Forms';
        $data['content_view'] = 'admin/final_forms/listforms';
        $this->load->view('admin/template_new', $data);
 }
 
 
 
 public function generateForm($id,$user_id){
//        $f_data['dept_id'] = $this->input->post('dept_id');
//        $f_data['form_id'] = $this->input->post('form_id');
//        $f_data['status'] = 'approve';
//        $f_data['description'] = $this->input->post('description');
//        $f_data['user_id'] = $this->input->post('user_id');
        $df = $this->department_form_model->Search(array('user_id'=>$user_id,'status'=>'approve'));
        $pf = $this->provost_model->Search(array('user_id'=>$user_id,'status'=>'approve'));
        $lf = $this->library_model->Search(array('user_id'=>$user_id,'status'=>'approve'));
        $sf = $this->sports_model->Search(array('user_id'=>$user_id,'status'=>'approve'));
        
       if(!empty($df) && !empty($pf) && !empty($lf) && !empty($sf)){
           $result = $this->final_form_model->Search(array('id'=>$id));
//        print_r($result);
//        exit();
            $user = GetUser($result[0]->user_id);
            $dept = GetDepartment($result[0]->dept_id);
            $data['dept'] = $dept->name;
            $data['session'] = '2021';
            $data['open_self'] = 'Self';

            $data['name'] = $user->full_name;
            $data['father_name'] = $user->father_name;
            $data['student_status'] = $user->student_status;
            $this->load->library('pdfgenerator');
    //        $this->load->view('admin//final_forms/index');
    //       $html =  $this->load->view('admin//final_forms/pdf',$data,true);
    //       print_r($html);
    //       exit();
    //        exit();
    //        echo site_url('assets/uploads/Image_002.jpg');
    //        exit();

            $html = $this->load->view('admin//final_forms/index',$data, true);  
    //        
            $filename = 'clearance-form-'.$user->full_name;
            $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
       }else{
           _setError('Your Form Not Approved From Some Department');
           redirect(site_url('admin/final_forms'));
           exit();
       }
        
        
 }
  
  
  public function delete_form($id){
     
         $result = $this->final_form_model->Delete($id);
         if($result){
            _setSuccess('Form Deleted Successfully');
         }
         else{
           _setError('Error Deleting Role');
         }
         redirect('admin/library');
    }
    
    
    
   
}


