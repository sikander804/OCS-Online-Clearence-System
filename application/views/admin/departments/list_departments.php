


<?php $this->load->view('notification-messages');?>

<br>

<div class="clear-fix text-right">
    <a type="submit" class="btn btn-primary"style="margin-bottom: 10px; margin-top: 20px;" href="<?=site_url('admin/departments/add_department')?>"><i class="fas fa-plus"></i> Add Department</a>
</div>


 
  <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Departments List</h6>
            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr>
                                            <th>Department Id</th>
                                            <th>Department Name</th>
                                            <th>Department Chairman</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                
                                <tbody>
                                     <?php if(!empty($departments)){
                 
                                        foreach ($departments as $department){ ?>
                                        <?php if(!empty($department->id)){ ?>
                                        <tr>
                                            
                                            <td><?=$department->id?></td>
                                            <td><?=$department->name?></td>
                                            <td>
                                                <?php $user = GetUser($department->dept_chairman_id); 
                                                   if(!empty($user->full_name)){
                                                       echo $user->full_name;
                                                   }else{
                                                       echo "Chairman Not Exists";
                                                   }     
                                                 ?>
                                            </td>
                                            <td>
                                            <?=$department->status?>
                                            </td>
                                            <td><a href="<?php echo base_url();  ?>admin/departments/edit_department/<?php  echo $department->id;  ?>" class="btn btn-success">Edit</a></td>
                                            <td><a href="<?php echo base_url();  ?>admin/departments/delete_department/<?php  echo $department->id;  ?>" class="btn btn-danger" onclick="return checkDelete()" >Delete</a></td>
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