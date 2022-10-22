





     <form class="form-horizontal user mt-5" action ="<?=site_url('admin/roles/update_role').'/'.$user->id;?>" method="post" enctype="multipart/form-data">
      
      <div class="">
<!--          <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6"></div>
          </div>-->
         <div class="form-group">
            <label>Member Name </label>
            <input type="text" name="m_name" id="autouser" readonly="" style="" class="form-control form-control-user col-6" required="" placeholder="Member Name" value="<?=$user->full_name?>">
            <!--<input type="hidden" name="user_id" id="userid" style="" class="form-control form-control-user col-6">-->
            <label>Role Name </label>
            <select class="form-control col-6" name="role_id">
               <?php foreach($roles as $role){?>
                <option value="<?=$role->role_id?>" <?=$role->role_id == $user->user_role_id ? 'selected' :'' ?>><?=$role->name?></option>
               <?php } ?>
            </select>
         </div>
         
      </div>
      
       <div class="">
       <button type="submit" class="btn btn-success" style="">Save</button>
      </div>
   
      </form>
   

<script> 
    $(document).ready(function(){

     $( "#autouser" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?=base_url()?>admin/users/userList",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
                console.log('ajax complte');
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#autouser').val(ui.item.label); // display the selected text
//          $('#name').val(ui.item.label); // display the selected text
          $('#userid').val(ui.item.value); // save selected id to input
         
          return false;
        }
      });

    });


   
</script>
