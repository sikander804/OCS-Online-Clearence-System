


<?php $this->load->view('notification-messages');?>

<br>

<div class="clear-fix text-right">
    <a type="submit" class="btn btn-primary"style="margin-bottom: 10px; margin-top: 20px;" href="<?=site_url('admin/forms/add_form')?>"><i class="fas fa-plus"></i> Add New Form</a>
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
                                            <th>Generate Form</th>
                                        </tr>
                                    </thead>
                                
                                <tbody>
                                    <?php if(!empty($forms)){
                 
                                        foreach ($forms as $form){
                                            
                                            $result = ifGenerateForm($form->user_id);
                                            if($result == 'Generate'){
                                            $user = GetUser($form->user_id);
                                            $dept = GetDepartment($form->dept_id);
                                        if(empty($form->status)){        
                                    ?>
                                        <?php if(!empty($form->form_id) && !empty($user->full_name) && !empty($dept->name)){ ?>
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
                                            <td><a href="<?php echo base_url('admin/final_forms/generateForm/'.$form->id.'/'.$form->user_id);  ?>" class="btn btn-success" onclick="return confirm('Are you sure want to Generate a form?')">Generate</a></td>
                                            <!--<td><a href="<?php echo base_url();  ?>admin/library/approve_form/<?php  echo $form->id;  ?>" class="btn btn-info" onclick="return confirm('Are you sure want to approve this form?')">Approve</a></td>-->
                                        </tr>
                                            <?php 
                                        }
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