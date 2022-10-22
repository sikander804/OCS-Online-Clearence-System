<?php $this->load->view('frontend/include/header'); ?>
<?php

//print_r($department_form);
//                                    exit();

$session_id = $this->session->userdata('user_session_id');
$session_username = $this->session->userdata('user_session_name');
$session_fullname = $this->session->userdata('user_session_full_name');
$session_fathername = $this->session->userdata('user_session_father_name');
if(isset($session_id) && intval($session_id) < 0){
    redirect(site_url('mainpage'));
    exit();
    
}
//echo "<pre>";
//print_r($provost_form);
//exit();
?>

<section id="show-case">
    <div class="container">
        <div class="row">
            <div class="offset-2 col-md-9">
                <h1 class="text-center"> Your Form Status</h1>
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Student Id</th>
                            <th>Full Name</th>
                            <th>Father Name</th>
                            <th>Form Id</th>
                            <th>Form Name</th>
                            <th>Form Status</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><?=$session_id?></td>
                            <td><?=$session_fullname?></td>    
                            <td><?=$session_fathername?></td>    
                            <td>
                                <?php if(isset($department_form)){ ?>
                                <p class="text-center"><?=$department_form[0]->id?> </p>
                                <?php }else{ ?>
                                <p class="text-center">_____</p>
                                <?php } ?>
                            </td>    
                            <td>Department Form</td>   
                            <td>
                            <?php if(isset($department_form)){
                            
                                if($department_form[0]->status == 'approve'){ ?>
                                    <i class="fas fa-check-circle pl-4 fa-2x" style="color: #28a745;"></i>
                                <?php }elseif($department_form[0]->status == 'disapprove'){?>
                                    <i class="far fa-times-circle pl-4 fa-2x" style="color:red"></i> 
                                <?php 
                                }elseif ($department_form[0]->status == '') { ?>
                                    <i class="fas fa-spinner pl-4 fa-2x" style="color:#28a745"></i>
                                <?php }
                            }else{ ?>
                                    <i class="fas fa-exclamation pl-4 fa-2x" style="color: orange;"></i>
                              <?php } ?>
                            </td>
                            <td>
                                <?php if(isset($department_form) ){
                                    if($department_form[0]->status != ''){?>
                                <a href="<?=site_url('mainpage/getFormDetail/'.$department_form[0]->id.'-df')?>" class="btn btn-success">View</a>
                                <?php }else{ ?>
                                <a href="javascript:void(0)"  class="btn btn-success disabled">View</a>
                                <?php 
                                }
                                }else{ ?>
                                  <a href="javascript:void(0)"  class="btn btn-success disabled">View</a>  
                              <?php  } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?=$session_id?></td>
                            <td><?=$session_fullname?></td>    
                            <td><?=$session_fathername?></td>     
                            <td>
                                <?php if(isset($provost_form)){ ?>
                                 <p class="text-center"><?=$provost_form[0]->id?></p>
                                <?php }else{ ?>
                                <p class="text-center">_____</p>
                                <?php } ?>
                            </td>    
                            <td>Provost Form</td>    
                            <td>
                            <?php if(isset($provost_form)){
                            
                                if($provost_form[0]->status == 'approve'){ ?>
                                    <i class="fas fa-check-circle pl-4 fa-2x" style="color: #28a745;"></i>
                                <?php }elseif($provost_form[0]->status == 'disapprove'){?>
                                    <i class="far fa-times-circle pl-4 fa-2x" style="color:red"></i> 
                                <?php 
                                }elseif ($provost_form[0]->status == '') { ?>
                                    <i class="fas fa-spinner pl-4 fa-2x" style="color:#28a745"></i>
                                <?php }
                            }else{ ?>
                                    <i class="fas fa-exclamation pl-4 fa-2x" style="color: orange;"></i>
                              <?php } ?>
                            </td>
                            <td>
                                <?php if(isset($provost_form) ){
                                    if($provost_form[0]->status != ''){?>
                                <a href="<?=site_url('mainpage/getFormDetail/'.$provost_form[0]->id.'-pf')?>" class="btn btn-success">View</a>
                                <?php }else{ ?>
                                <a href="javascript:void(0)"  class="btn btn-success disabled">View</a>
                                <?php 
                                    }
                                }else{ ?>
                                  <a href="javascript:void(0)"  class="btn btn-success disabled">View</a>  
                                <?php  } 
                                  ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?=$session_id?></td>
                            <td><?=$session_fullname?></td>    
                            <td><?=$session_fathername?></td>   
                            <td>
                                <?php if(isset($library_form)){ ?>
                                   <p class="text-center"> <?=$library_form[0]->id?> </p>
                                <?php }else{ ?>
                                <p class="text-center">_____</p>
                                <?php } ?>
                            </td>   
                            <td>Library Form</td>    
                            <td>
                            <?php if(isset($library_form)){
                            
                                if($library_form[0]->status == 'approve'){ ?>
                                    <i class="fas fa-check-circle pl-4 fa-2x" style="color: #28a745;"></i>
                                <?php }elseif($library_form[0]->status == 'disapprove'){?>
                                    <i class="far fa-times-circle pl-4 fa-2x" style="color:red"></i> 
                                <?php 
                                }elseif ($library_form[0]->status == '') { ?>
                                    <i class="fas fa-spinner pl-4 fa-2x" style="color:#28a745"></i>
                                <?php }
                            }else{ ?>
                                    <i class="fas fa-exclamation pl-4 fa-2x" style="color: orange;"></i>
                              <?php } ?>
                            </td>
                            <td>
                                <?php if(isset($library_form) ){
                                    if($library_form[0]->status != ''){?>
                                <a href="<?=site_url('mainpage/getFormDetail/'.$library_form[0]->id.'-lf')?>" class="btn btn-success">View</a>
                                <?php }else{ ?>
                                <a href="javascript:void(0)"  class="btn btn-success disabled">View</a>
                                <?php 
                                    }
                                }else{ ?>
                                  <a href="javascript:void(0)"  class="btn btn-success disabled">View</a>  
                                <?php  } 
                                  ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?=$session_id?></td>
                            <td><?=$session_fullname?></td>    
                            <td><?=$session_fathername?></td>    
                            <td>
                                <?php if(isset($sport_form)){ ?>
                                <p class="text-center"><?=$sport_form[0]->id?></p>
                                <?php }else{ ?>
                                <p class="text-center">_____</p>
                                <?php } ?>
                            </td>   
                            <td>Sports Form</td>    
                            <td>
                            <?php if(isset($sport_form)){
                            
                                if($sport_form[0]->status == 'approve'){ ?>
                                    <i class="fas fa-check-circle pl-4 fa-2x" style="color: #28a745;"></i>
                                <?php }elseif($sport_form[0]->status == 'disapprove'){?>
                                    <i class="far fa-times-circle pl-4 fa-2x" style="color:red"></i> 
                                <?php 
                                }elseif ($sport_form[0]->status == '') { ?>
                                    <i class="fas fa-spinner pl-4 fa-2x" style="color:#28a745"></i>
                                <?php }
                            }else{ ?>
                                    <i class="fas fa-exclamation pl-4 fa-2x" style="color: orange;"></i>
                              <?php } ?>
                            </td>
                            <td>
                                <?php if(isset($sport_form) ){
                                    if($sport_form[0]->status != ''){?>
                                <a href="<?=site_url('mainpage/getFormDetail/'.$sport_form[0]->id.'-sf')?>" class="btn btn-success">View</a>
                                <?php }else{ ?>
                                <a href="javascript:void(0)"  class="btn btn-success disabled">View</a>
                                <?php 
                                    }
                                }else{ ?>
                                  <a href="javascript:void(0)"  class="btn btn-success disabled">View</a>  
                                <?php  } 
                                  ?>
                            </td>
                        </tr>
<!--                        <tr>
                            <td>1</td>
                            <td>SIkander Ahmad</td>    
                            <td>Masood Ahmad</td>    
                            <td>11</td>    
                            <td>Department Form</td>    
                            <td>
                            <?php if($provost_form[0]->status == 'approve'){ ?>
                            <i class="fas fa-check-circle pl-4 fa-2x" style="color: #28a745;"></i>
                            <?php }else {?>
                            <i class="far fa-times-circle pl-4 fa-2x" style="color:red"></i> 
                            <?php } ?>
                                
                            </td>
                            <td><a href="#">View</a></td>
                        </tr>-->
                        
                    </tbody>
                </table>
                <?php 
                if(isset($final_form)){
                    $res = ifGenerateForm($final_form[0]->user_id);
                    if($res == 'Generate'){       
                ?>
                <a target="_blank" href="<?= site_url('mainpage/generateFinalForm/'.$final_form[0]->form_id.'/'.$final_form[0]->user_id.'/'.$final_form[0]->dept_id)?>" class="btn btn-outline-dark">Generate Form</a>
                    <?php }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>

<?php $this->load->view('frontend/include/footer'); ?>