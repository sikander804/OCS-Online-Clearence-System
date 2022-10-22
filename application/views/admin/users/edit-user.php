


<?php $this->load->view('notification-messages');?>


     <form class="form-horizontal user mt-5" action ="<?=site_url('admin/users/update_user').'/'.$edit_user->id;?>" method="post" enctype="multipart/form-data">
      
      <div class="">
<!--          <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6"></div>
          </div>-->
         <div class="form-group">
            <label>Full Name </label>
            <input type="text" name="full_name" style="" class="form-control form-control-user col-6" required="" placeholder="Full Name" value="<?=$edit_user->full_name?>">
            <label>Father Name </label>
            <input type="text" name="father_name" style="" class="form-control form-control-user col-6" required="" placeholder="Father Name" value="<?=$edit_user->father_name?>">
           <label>Status <small>(Only for students)</small></label>
            <select name="student_status" class="form-control col-6">
                <option>Select Student Status</option>
                <option value="Self" <?=$edit_user->student_status == 'Self'? 'selected' :'' ?>>Self</option>
                <option value="Open" <?=$edit_user->student_status == 'Open'? 'selected' :'' ?>>Open</option>
            </select>
            <label>Username </label>
            <input type="text" name="username" style="" class="form-control form-control-user col-6" placeholder="User Name" value="<?=$edit_user->username?>">
            <label>Email </label>
            <input type="email" name="email" style="" class="form-control form-control-user col-6" placeholder="Email" value="<?=$edit_user->email?>">
            
            
            <label>Password </label><br>
            <small>Don't type password if you dont want to change</small>
            <input type="password" name="password" style="" class="form-control form-control-user col-6" placeholder="User Password" value="">
            
         </div>
         
      </div>
      
       <div class="">
       <button type="submit" class="btn btn-success" style="">Save</button>
      </div>
   
      </form>
   