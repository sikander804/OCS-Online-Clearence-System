<?php
function LoginCheck(){
    if(!is_logged_in()){
        redirect(site_url("admin"));
        exit();
    }    
}

function AdminLoginCheck(){
    $CI =& get_instance();
    $admin_user_id = $CI->session->userdata('admin_user_session_id');
    if($admin_user_id>0){}else{
        redirect(site_url("admin"));
        exit();
    }
}


function check_form(){
    
}

function encrypt_password($password)
{
    return md5($password);
}

function set_user_session($user_id)
{
    $CI =& get_instance();
    $CI->session->set_userdata('user_session_id',$user_id);
}

function unset_user_session()
{
    $CI =& get_instance();
    $CI->session->unset_userdata('user_session_id');    
}

function is_logged_in()
{
    return user_session()->user_id==0?false:true;    
}

function user_session()
{
    $CI =& get_instance();
    $user_id=$CI->session->userdata('user_session_id');
    $CI->load->model('User_model','user_model');
    $user=$CI->user_model->User->getByID($user_id);
    if(!$user){
        $user = new stdClass();
        $user->user_id=0;
    }
    return $user;
}


function current_full_url()
{
    $CI =& get_instance();
    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}

function _setSuccess($message){
   $CI =& get_instance();
   $CI->session->set_flashdata('INF_MSG',$message); 
}
function _getSuccess(){
   $CI =& get_instance();
   return $CI->session->flashdata('INF_MSG');
}

function _setError($message){
   $CI =& get_instance();
   $CI->session->set_flashdata('ERR_MSG',$message);
}

function _getError(){
   $CI =& get_instance();
   return $CI->session->flashdata('ERR_MSG');
}

function _setWarning($message){
   $CI =& get_instance();
   $CI->session->flashdata('WRR_MSG',$message);
}

function SetSession($key,$value)
{
    $CI =& get_instance();
    $CI->session->set_userdata($key,$value);
}

function UnSetSession($key)
{
    $CI =& get_instance();
    $CI->session->unset_userdata($key); 
}

function GetSession($key)
{
    $CI =& get_instance();
    return $CI->session->userdata($key);
}

function GetUser($id){
    $CI =& get_instance();
    $CI->load->model('Users_model','users_model');
    $user = $CI->users_model->GetById($id);
    return $user;
}

function CvReviewTeamList(){
    $CI =& get_instance();
    $query = $CI->db->query('Select m_id from jb_member where role_id in (1,2,5)');
    $data = $query->result();
    $return = array();
    if($data){
        foreach ($data as $user) {
            $return[] = $user->m_id;
        }
    }
    return $return;
}

function ifGenerateForm($user_id){
    $CI = & get_instance();
    $CI->load->model('Forms_model', 'form_model');
    $CI->load->model('Departments_model', 'department_model');
    $CI->load->model('Provost_model', 'provost_model');
    $CI->load->model('Admin_model', 'admin_model');
    $CI->load->model('Library_model', 'library_model');
    
    
    $df = $CI->department_form_model->Search(array('user_id'=>$user_id,'status'=>'approve'));
    $pf = $CI->provost_model->Search(array('user_id'=>$user_id,'status'=>'approve'));
    $lf = $CI->library_model->Search(array('user_id'=>$user_id,'status'=>'approve'));
    $sf = $CI->sports_model->Search(array('user_id'=>$user_id,'status'=>'approve'));
    
    if(!empty($df) && !empty($pf) && !empty($lf) && !empty($sf)){
        return "Generate";
        
    }else{
        return "notGenerate";
    }
    
}
 


function GetUserRole($id){
    $CI =& get_instance();
    $CI->load->model('Roles_model','roles_model');
    $user_role = $CI->roles_model->GetByUserId($id);
    return $user_role;
}

function GetRole($id){
    $CI =& get_instance();
    $CI->load->model('Roles_model','roles_model');
    $role = $CI->roles_model->GetById($id);
    return $role;
}

function GetDepartment($id){
    $CI =& get_instance();
    $CI->load->model('Departments_model','departments_model');
    $dept = $CI->departments_model->GetById($id);
    return $dept;
}

//function RoleList(){
//    $CI =& get_instance();
//    $query = $CI->db->query('Select id from users where role_id in (3,10)');
//    $data = $query->result();
//    $return = array();
//    if($data){
//        foreach ($data as $user) {
//            $return[] = $user->m_id;
//        }
//    }
//    return $return;
//}



