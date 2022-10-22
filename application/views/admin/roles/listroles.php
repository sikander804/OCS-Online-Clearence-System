


<?php $this->load->view('notification-messages');?>

<br>

<div class="clear-fix text-right">
    <a type="submit" class="btn btn-primary"style="margin-bottom: 10px; margin-top: 20px;" href="<?=site_url('admin/roles/add_role')?>"><i class="fas fa-plus"></i> Add Role</a>
</div>


 
  <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Roles List</h6>
            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr>
                                            <th>Role Name</th>
                                            <th>Member Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                
                                <tbody>
                                     <?php if(!empty($users)){
                 
                                        foreach ($users as $user_role){ ?>
                                        <?php if(!empty($user_role->user_role_id)){ ?>
                                        <tr>
                                            
                                            <td><?php echo GetRole($user_role->user_role_id)->name; ?></td>
                                            <td><?=$user_role->full_name?></td>
                                            <td><a href="<?php echo base_url();  ?>admin/roles/edit_role/<?php  echo $user_role->id;  ?>" class="btn btn-success">Edit</a></td>
                                            <td><a href="<?php echo base_url();  ?>admin/roles/delete_role/<?php  echo $user_role->id;  ?>" class="btn btn-danger" onclick="return checkDelete()" >Delete</a></td>
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