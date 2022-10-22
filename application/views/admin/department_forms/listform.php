


<?php $this->load->view('notification-messages');?>

<br>
<div class="container">
    <form class="form-horizontal user mt-5" action ="<?=site_url('admin/department_forms/GetForms');?>" method="post" enctype="multipart/form-data">
        <select class="form-control col-4 " name="dept_name">
    <?php foreach($departments as $department){ ?>
        <option value="<?=$department->id?>"><?=$department->name?></option>
    <?php } ?>
</select>
        <button type="submit" class="btn btn-success mb-4 mt-3" style="">Search</button>
    </form>
</div>


<div class="container mt-4 mb-3">
        <div class="row">
            <div class="col-md-4">
                <a href="<?= site_url('admin/department_forms/show_approved_forms')?>" class="btn btn-success">Show Approved Form</a>
            </div>
            <div class="col-md-4">
                <a href="<?= site_url('admin/department_forms/show_disapproved_forms')?>" class="btn btn-danger">Show Disapproved Form</a>
            </div>
        </div>
    
</div>
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Forms List</h6>
            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr>
                                            <th>Form Id</th>
                                            <th>Member Name</th>
                                            <th>Department Name</th>
                                            <th>Form Status</th>
                                            <th>Approve</th>
                                            <th>Disapproved</th>
                                        </tr>
                                    </thead>
                                
                                <tbody>
                                     <?php if(!empty($forms)){
//                 print_r($forms);
//                 exit();
                                        foreach ($forms as $form){ 
                                            $user = GetUser($form->user_id);
                                            $dept = GetDepartment($form->dept_id);
                                            ?>
                                        <?php if(!empty($form->form_id) && !empty($user->full_name) && !empty($dept->name)){  
                                              if(empty($form->status)){
                                            ?>
                                        <tr>
                                            
                                            <td><?=$form->form_id?></td>
                                            <td><?php 
//                                            $user = GetUser($form->user_id);
                                            echo $user->full_name?></td>
                                            <td>
                                                <?php 
//                                                $dept = GetDepartment($form->dept_id);
                                                echo $dept->name;
                                                    ?>
                                            </td>
                                            
                                            
                                            <?php // echo $form->status;exit();?>
                                            <td><?php if(!empty($form->status)){echo $form->status;}else{echo "NULL";}?></td>
                                            <!--<td><a href="<?php echo base_url();  ?>admin/library/edit_library_form/<?php  echo $form->id;  ?>" class="btn btn-success">Edit</a></td>-->
                                            <td><a href="<?php echo base_url();  ?>admin/department_forms/approve_form/<?php  echo $form->id;  ?>" class="btn btn-info" onclick="return confirm('Are you sure want to approve this form?')">Approve</a></td>
                                            <td><a href="<?php echo base_url();  ?>admin/department_forms/disapprove_form/<?php  echo $form->id;  ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to disaaprove this form?')">Disapprove</a></td>
                                            
                                        </tr>
                                            <?php 
                                              }  
                                        }
                                        }
                                     }
                                            ?>

                                </tbody>
                                </table>
                            </div>
                        </div>
  </div>
        

 
<script>
    

    
    
    function checkDelete(){
        return confirm("Do You Really Want To DELETE This Data??");
    }
</script>