<?php $this->load->view('frontend/include/header'); ?>
<?php

$session_id = $this->session->userdata('user_session_id');
$session_username = $this->session->userdata('user_session_name');
$session_fullname = $this->session->userdata('user_session_full_name');
$session_fathername = $this->session->userdata('user_session_father_name');
if(isset($session_id) && intval($session_id) < 0){
    redirect(site_url('mainpage'));
    exit();
    
}
//echo "<pre>";
//print_r($forms);
//exit();
?>
<style>
    .card1 {
  background: #f5f5f5;
  border-radius: 2px;
  display: inline-block;
  height: 400px;
  margin: 1rem;
  position: relative;
  width: 660px;
}
.card-2 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
.card-2:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

</style>
<div class="container">
    <h1 class="text-center">Form Details</h1>
    <hr style="width:25%">
        <div class="mx-auto text-center">
            <div class="card1 card-2">
                <a href="<?= site_url('mainpage/home')?>" class="btn btn-outline-secondary ml-3 mt-2 float-left">Go Back</a>
                <div class="text-center mt-4 mb-3">
                    <h3 class="pr-5 mr-5">Form Status</h3>
                    <hr style="width: 25%">
                   <?php if(isset($forms->status)){ 
                       if($forms->status == 'approve'){?>
                    <h6><?= strtoupper($forms->status)?><i class="fas fa-check-circle pl-4 fa-1x" style="color: #28a745;"></i></h6> 
                    <?php }else{ ?>
                    <h6><?= strtoupper($forms->status)?><i class="far fa-times-circle pl-4 fa-1x" style="color:red"></i></h6> 
                    <?php }
                   }?>
                </div>
                <div class="text-center mt-4">
                    <h3>Comments</h3>
                    <hr style="width: 25%">
                </div>
                <p>
                    <?php
                    if(isset($forms->description)){ ?>
                        <p><?=$forms->description?></p>
                   <?php } ?>
                </p>
                
            </div>
        </div>
</div>







<?php $this->load->view('frontend/include/footer'); ?>