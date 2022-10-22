





<?php $this->load->view('notification-messages');?>


<br>

<div class="clear-fix text-right">
    <a type="submit" class="btn btn-primary"style="margin-bottom: 10px; margin-top: 20px;" href="<?=site_url('admin/users/add_user')?>"><i class="fas fa-plus"></i> Add Users</a>
</div>


 
  <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Full Name</th>
                                            <th>Father Name</th>
                                            <!--<th>Student Status</th>-->
                                            <th>username</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                
                                <tbody>
                                     <?php if(!empty($users)){
                 
                                        foreach ($users as $user){ ?>
                                        <?php if(!empty($user->id)){ ?>
                                        <tr>
                                            
                                            <td><?=$user->id?></td>
                                            <td><?php echo $user->full_name; ?></td>
                                            <td><?php echo $user->father_name; ?></td>
                                            <!--<td><?php echo $user->student_status; ?></td>-->
                                            <td><?php echo $user->username; ?></td>
                                            <td><?php echo $user->email; ?></td>
                                            <td><a href="<?php echo base_url();  ?>admin/users/edit_user/<?php  echo $user->id;  ?>" class="btn btn-success">Edit</a></td>
                                            <td><a href="<?php echo base_url();  ?>admin/users/delete_user/<?php  echo $user->id;  ?>" class="btn btn-danger" onclick="return checkDelete()" >Delete</td>
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