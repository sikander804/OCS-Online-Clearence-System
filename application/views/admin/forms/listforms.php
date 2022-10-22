


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
                                            <th>Department Name</th>
                                            <th>Member Name</th>
                                            <th>Form Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                
                                <tbody>
                                     <?php if(!empty($forms)){
                 
                                        foreach ($forms as $form){
                                        $dept = GetDepartment($form->dept_id);
                                        $user = GetUser($form->user_id);
                                            ?>
                                        <?php if(!empty($form->form_id) && !empty($user->full_name) && !empty($dept->name)){ ?>
                                        <tr>
                                            
                                            <td><?=$form->form_id?></td>
                                            <td>
                                                <?php 
//                                                $dept = GetDepartment($form->dept_id);
                                                echo $dept->name;
                                                    ?>
                                            </td>
                                            
                                            <td><?php 
//                                            $user = GetUser($form->user_id);
                                            echo $user->full_name?></td>
                                            
                                            <td><?=$dept->status?></td>
                                            <td><a href="<?php echo base_url();  ?>admin/forms/edit_form/<?php  echo $form->form_id;  ?>" class="btn btn-success">Edit</a></td>
                                            <td><a href="<?php echo base_url('admin/forms/delete_form/'.$form->form_id.'/'.$form->user_id.'/'.$form->dept_id);  ?>" class="btn btn-danger" onclick="return checkDelete()" >Delete</a></td>
                                        </tr>
                                            <?php 
                                            
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