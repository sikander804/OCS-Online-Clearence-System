





     <form class="form-horizontal user mt-5" action ="<?=site_url('admin/forms/update_form').'/'.$edit_form->form_id;?>" method="post" enctype="multipart/form-data">
      
      <div class="">

         <div class="form-group">
            <label>Department Name </label>
            <select class="form-control col-6" required name="dept_id">
                <?php foreach($depts as $dept) { ?>
                <option value="<?=$dept->id?>" <?=$dept->id == $edit_form->dept_id ? 'selected' : '' ?> ><?=$dept->name?></option>
                <?php } ?>
            </select>
<!--            <label>Role Name </label>
            <input type="text" name="name" style="" class="form-control form-control-user col-6" required="" placeholder="Role Name" value="">-->
         </div>
         
      </div>
      
       <div class="">
       <button type="submit" class="btn btn-success" style="">Save</button>
      </div>
   
      </form>
   