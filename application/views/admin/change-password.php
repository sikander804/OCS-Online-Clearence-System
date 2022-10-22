<style type="text/css">
 #experties label {
 font-weight: 600;
font-size: 15px;
/*padding-left: 20px;*/
}
#experties input{
    /*margin-left: 10px;*/
 margin-top: 10px;
 margin-bottom: 10px;
}

    
</style>



    <form class="form-horizontal user" action="<?=site_url('admin/change_password/update_password');?>" method="post" enctype="
      multipart/form-data">
        <?php $this->load->view('notification-messages');?>
    <div class="row">        
        <div class="col-md-6 col-xs-12">
            <label>Current Password </label>
            <input type="text" name="current_password" placeholder="Current Password" style="margin-left: 10px;" class="form-control form-control-user" required="">
            <label>New Password </label>
            <input type="text" name="new_password" placeholder="New Password" style="margin-left: 10px;" class="form-control form-control-user" value="" required="">
             <label>Confirm Password </label>
            <input type="text" name="confirm_password" placeholder="Confirm Password" style="margin-left: 10px;" class="form-control form-control-user" required="">   
        </div>
    </div>


    <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>


<br>