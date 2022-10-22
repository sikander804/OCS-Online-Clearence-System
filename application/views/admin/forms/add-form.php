





     <form class="form-horizontal user mt-5" action ="<?=site_url('admin/forms/save_form');?>" method="post" enctype="multipart/form-data">
      
      <div class="">
<!--          <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6"></div>
          </div>-->
         <div class="form-group">
             <label>Student Name </label>
            <input type="text" name="m_name" id="autouser" style="" class="form-control form-control-user col-6" required="" placeholder="Member Name" value="">
            <input type="hidden" name="user_id" id="userid" style="" class="form-control form-control-user col-6">
            <label>Department Name </label>
            <select class="form-control col-6" required name="dept_id">
                <?php foreach($depts as $dept) { ?>
                <option value="<?=$dept->id?>"><?=$dept->name?></option>
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