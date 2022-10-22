





     <form class="form-horizontal user mt-5" action ="<?=site_url('admin/library/save_disapproved_form/'.$form->id);?>" method="post" enctype="multipart/form-data">
      
      <div class="">
<!--          <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6"></div>
          </div>-->
         <div class="form-group">
             <label>Member Name </label>
             <input type="text" name="m_name" class="form-control form-control-user col-6" disabled="" value=" <?=$user = GetUser($form->user_id)->full_name;?>">

            <label>Department Name </label>
            <input type="text" name="m_name" class="form-control form-control-user col-6" disabled="" value=" <?=$dept = GetDepartment($form->dept_id)->name;?>">
            
            <input type="hidden" name="form_id" value="<?=$form->form_id?>">
            <input type="hidden" name="user_id" value="<?=$form->user_id?>">
            <input type="hidden" name="dept_id" value="<?=$form->dept_id?>">
            
            <label>Description</label>
            <textarea class="form-control col-6" rows="4" name="description" required="" placeholder="discription"></textarea>
         </div>
         
      </div>
      
       <div class="">
       <button type="submit" class="btn btn-success" style="">Save</button>
      </div>
   
      </form>
