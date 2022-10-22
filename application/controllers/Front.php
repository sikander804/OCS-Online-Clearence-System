<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
    
        
        function __construct() {
            parent::__construct();     
            
              $this->load->model('Admin_model', 'admin_model');       
             
        }
        
        function index(){
//            $this->session->userdata('');
            $this->load->view('frontend/front');
        }
        
}        
?>