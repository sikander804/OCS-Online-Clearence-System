<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {
    
        
        function __construct() {
            parent::__construct();     
            
                $this->load->model('Admin_model', 'admin_model');       
                $this->load->model('Forms_model', 'forms_model');
                $this->load->model('Provost_model', 'provost_model');
                $this->load->model('Departments_model', 'department_model');
                $this->load->model('Department_forms_model', 'department_form_model');
                $this->load->helper('date');
                $this->load->model('Admin_model', 'admin_model');
                $this->load->model('Library_model', 'library_model');
                $this->load->model('Sports_model', 'sports_model');
                $this->load->model('Final_form_model', 'final_form_model');
             
        }
        
	public function index()
	{   
           $this->load->view('frontend/main_login');
	}
        
        public function register(){
            $this->load->view('frontend/main_register');
        } 
        
//        public function verify(){
//            $this->load->view('frontend/verify-user');
//        }
        
//        public function verify_user(){
//           
//            $m_verification = $this->input->post('m_verification');
//            if(!empty($m_verification)){
//               $res = $this->admin_model->Search(array('m_verification'=>$m_verification));
//               
//               if(!empty($res)){
////                    echo "HELOOO";
////                    exit();
//                   $res = $res[0];
//                   $return = $this->admin_model->Save(array('status' =>1),$res->id);
//                   _setSuccess('Your account has been activated please login again');
//                   redirect('mainpage');
//                   exit();
//               }
//            }else{
//                _setError('Invalid verification code');
//                redirect('mainpage/verify_user');
//                exit();
//            }
//        }
        
        public function register_user()
	{   
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $fullname = $this->input->post('full_name');
        $fathername = $this->input->post('father_name');
        $student_status = $this->input->post('student_status');
//        echo "hERE there";
//            exit();
        if(!empty($username) && !empty($password) && !empty($email)){
//            echo "hERE";
//            exit();
            $res = $this->admin_model->Search(array('email'=>$email));
//            print_r($res);
//            exit();
            if(empty($res)){
                $m_verification = rand(10000 , 99999);
                $data['username'] = $username;
                $data['full_name'] = $fullname;
                $data['father_name'] = $fathername;
                $data['password'] = encrypt_password($password);
                $data['email'] = $email; 
                $data['student_status'] = 1; 
//                $data['m_verification'] = $m_verification;
                
               if($this->admin_model->Save($data)){
//                   echo "helo";
//                   exit();
//                    $to = $email;
//                    $subject     = "Thanks you ".$name." for Registration with CPA One more step need to be completed";
//                    $messageText = '<html><body>';
//                    $messageText .= "Dear ".$name.",                    
//                    <br><br><br>
//                    Thank you for registering with CPAs!
//                    <br><br>
//                    Your Verification code is
//                    <br>
//                    <b style='text-align: center;font-size: 30px;font-size: bold;'>".$m_verification."</b>
//                    <br><br>
//                    Or copy and paste the url in the browser: ".base_url()."user/verify/"."             
//                    <br>
//                    Regards,
//                    <br><br>
//                    The Navafiz Team
//                    <br><br>
//                    *This message was sent by an automated mail server. Please do not reply.
//                    <br>";
//                    
//                    
//                    $messageText .= "'</html></body>"; 
//                    $config = Array(
//                        'protocol' => 'smtp',
//                        'smtp_host' => 'ssl://smtp.googlemail.com', //
//                        'smtp_port' => 465,        
//                        'smtp_user' => SMTP_USER, //
//                        'smtp_pass' => SMTP_PASSWORD, //
//                        'mailtype' => 'html',
//                        'charset' => 'iso-8859-1',
//                        'wordwrap' => TRUE        
//                    );   
//
//                    $config['newline'] = "\r\n";
//                    $config['crlf']    = "\r\n";
//
//                    $this->load->library("email",$config);
//                    $this->email->set_mailtype("html");
//                    $this->email->set_newline("\r\n");
//                    $this->email->from('navafizweb@gmail.com', 'CPA');
//                    $this->email->to($to);
//                    $this->email->subject($subject);
//                    $this->email->message($messageText);
//                    
//                    
//                    if($this->email->send()) {
//                        if($retun>0){
//                            _setSuccess('Please check your Email inbox/spam and enter the verification code to complete registration on Navafiz');                    
//                            redirect('mainpage/verify'); 
//                            exit();
//                        }else{
//                            _setError("There is some problem with Website Adminstrator");
//                            redirect('mainpage/register'); 
//                            exit();
//                        }                    
//                    } else {
//                        _setError("Your registeration is completed for login check with Website Adminstrator");
//                        redirect('mainpage'); 
//                        exit();
//                    }
                        _setSuccess('Registered successfully please login');                    
                        redirect('mainpage/'); 
                        exit();
               }
            }else{
                _setError("You're already registered with provided email, Please login or try forgot password");                
                redirect('mainpage/register');     
                exit();
            }
            
            
            
        }
    }
    
     public function generateFinalForm($form_id,$user_id,$dept_id){

        $df = $this->department_form_model->Search(array('user_id'=>$user_id,'dept_id'=>$dept_id,'form_id'=>$form_id,'status'=>'approve'));
        $pf = $this->provost_model->Search(array('user_id'=>$user_id,'dept_id'=>$dept_id,'form_id'=>$form_id,'status'=>'approve'));
        $lf = $this->library_model->Search(array('user_id'=>$user_id,'dept_id'=>$dept_id,'form_id'=>$form_id,'status'=>'approve'));
        $sf = $this->sports_model->Search(array('user_id'=>$user_id,'dept_id'=>$dept_id,'form_id'=>$form_id,'status'=>'approve'));
        
       if(!empty($df) && !empty($pf) && !empty($lf) && !empty($sf)){
           $result = $this->final_form_model->Search(array('user_id'=>$user_id,'dept_id'=>$dept_id,'form_id'=>$form_id));
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
    
    public function generate_form($id){
        $data['s_id'] = $id;
        $data['departments'] = $this->department_model->GetAll();
        $this->load->view('frontend/generate_form',$data);
    }
    
    public function generate_student_form($id){
        $data['user_id'] = $id;
        $data['dept_id'] = $this->input->post('department_id');
        if(empty($data['dept_id'])){
            _setError('Please Select Department');
            redirect(site_url('mainpage/generate_form/'.$id));
            exit();
        }else{
            $res = $this->forms_model->Search(array('user_id'=>$data['user_id'],'dept_id'=>$data['dept_id']));
            if(!empty($res)){
                _setError('Form Already Generated, Please login to see your form');
                redirect(site_url('mainpage/'));
                exit();
            }else{
                $form_id = $this->forms_model->Save($data);
                if(intval($form_id) > 0){
                    _setSuccess('Form Successfully Generated, Please login to see your form status');
                    $d_data['user_id'] = $data['user_id'];
                    $d_data['dept_id'] = $data['dept_id'];
                    $d_data['form_id'] = $form_id;
                    $this->department_form_model->Save($d_data);
                    redirect(site_url('mainpage/'));
                    exit();
                }else{
                    _setError('There is problem in website administration, Please try again');
                    redirect(site_url('mainpage/generate_form/'.$id));
                    exit();
                }
            }
            
        }
        
        
    }
    
    public function home() {
        $session_id = $this->session->userdata('user_session_id');
        $session_username = $this->session->userdata('user_session_name');
        $session_fullname = $this->session->userdata('user_session_full_name');
        $session_fathername = $this->session->userdata('user_session_father_name');
        if(isset($session_id) && intval($session_id) < 0){
            redirect(site_url('mainpage'));
            exit();

        }else{
                    $getForm = $this->forms_model->Search(array('user_id'=>$session_id));
                    $getFormDep = $this->department_form_model->Search(array('user_id'=>$session_id));
                    $getFormPro = $this->provost_model->Search(array('user_id'=>$session_id));
                    $getFormlib = $this->library_model->Search(array('user_id'=>$session_id));
                    $getFormSpo = $this->sports_model->Search(array('user_id'=>$session_id));
                    $getFormFinal = $this->final_form_model->Search(array('user_id'=>$session_id));
                    $data = array();
                    if(!empty($getForm)){
                        $data['first_form'] = $getForm;
                    }
                    if(!empty($getFormDep)){
                        $data['department_form'] = $getFormDep;
                    }
//                    else{
//                        $data['department_form'] = 'empty';
//                    }
                    if(!empty($getFormPro)){
                        $data['provost_form'] = $getFormPro;
                    }
//                    else{
//                        $data['provost_form'] = 'empty';
//                    }
                    if(!empty($getFormlib)){
                        $data['library_form'] = $getFormlib;
                    }
//                    else{
//                        $data['library_form'] = 'empty';
//                    }
                    if(!empty($getFormSpo)){
                        $data['sport_form'] = $getFormSpo;
                    }
//                    else{
//                        $data['sport_form'] = 'empty';
//                    }
                    if(!empty($getFormFinal)){
                        $data['final_form'] = $getFormFinal;
                    }
//                    else{
//                        $data['final_form'] = 'empty';
//                    }
                    
                    $this->load->view('frontend/front',$data);
        }
        
    }
    
    
    public function getFormDetail($id){
        
        if(intval($id) > 0){
            if(strpos($id, 'df') == true){
                $arr = explode("-", $id, 2);
                $fm_id = $arr[0];
                $data['forms'] = $this->department_form_model->GetById($fm_id);
            } elseif (strpos($id, 'pf') == true) {
                $arr = explode("-", $id, 2);
                $fm_id = $arr[0];
                
                $data['forms'] = $this->provost_model->GetById($fm_id);
            }elseif (strpos($id, 'lf') == true) {
                $arr = explode("-", $id, 2);
                $fm_id = $arr[0];
                $data['forms'] = $this->library_model->GetById($fm_id);
            }elseif (strpos($id, 'sf') == true) {
                $arr = explode("-", $id, 2);
                $fm_id = $arr[0];
                $data['forms'] = $this->sports_model->GetById($fm_id);
            }
            $this->load->view('frontend/form-detail',$data);
           
        }
    }
    
    
    
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        if(!empty($username) && !empty($password)){
            $password = encrypt_password($password);
            $get_user =  $this->admin_model->Search(array('username' =>$username, 'password' =>$password));
            if(!empty($get_user)){
                $get_user = $get_user[0];
                $this->session->set_userdata('user_session_id',$get_user->id);
                $this->session->set_userdata('user_session_name',$get_user->username);
                $this->session->set_userdata('user_session_full_name',$get_user->full_name);
                $this->session->set_userdata('user_session_father_name',$get_user->father_name);
                $res = $this->forms_model->Search(array('user_id'=>$get_user->id));
                if(empty($res)){
                    $s_user_id = $get_user->id;
//                    echo $s_user_id;
//                    exit();
                    redirect('mainpage/generate_form/'.$s_user_id);
                    exit();
                }else{
                    $getForm = $this->forms_model->Search(array('user_id'=>$get_user->id));
                    $getFormDep = $this->department_form_model->Search(array('user_id'=>$get_user->id));
                    $getFormPro = $this->provost_model->Search(array('user_id'=>$get_user->id));
                    $getFormlib = $this->library_model->Search(array('user_id'=>$get_user->id));
                    $getFormSpo = $this->sports_model->Search(array('user_id'=>$get_user->id));
                    $getFormFinal = $this->final_form_model->Search(array('user_id'=>$get_user->id));
                    $data = array();
                    if(!empty($getForm)){
                        $data['first_form'] = $getForm;
                    }
                    if(!empty($getFormDep)){
                        $data['department_form'] = $getFormDep;
                    }
//                    else{
//                        $data['department_form'] = 'empty';
//                    }
                    if(!empty($getFormPro)){
                        $data['provost_form'] = $getFormPro;
                    }
//                    else{
//                        $data['provost_form'] = 'empty';
//                    }
                    if(!empty($getFormlib)){
                        $data['library_form'] = $getFormlib;
                    }
//                    else{
//                        $data['library_form'] = 'empty';
//                    }
                    if(!empty($getFormSpo)){
                        $data['sport_form'] = $getFormSpo;
                    }
//                    else{
//                        $data['sport_form'] = 'empty';
//                    }
                    if(!empty($getFormFinal)){
                        $data['final_form'] = $getFormFinal;
                    }
//                    else{
//                        $data['final_form'] = 'empty';
//                    }
                    
                    $this->load->view('frontend/front',$data);
                }
                
                
                
            }else{
                _setError('Invalid Username or Password');
                redirect(site_url('mainpage'));
                exit();
            }
        }
        
    }
    
    
    public function logout(){
        session_start(); 
        $this->session->set_userdata('user_session_id', "");
        $this->session->set_userdata('user_session_name', "");            
        $user_session_data = array(
            'user_session_id'     => "",
            'user_session_name'=> "",                
        );
        $this->session->unset_userdata($user_session_data);   
        $this->session->sess_destroy();
        redirect(site_url("mainpage/"));
        exit();
    }
    
    
    public function profile(){
        echo "Successfully logged in!!!";
        exit();
    }
}
