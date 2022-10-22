<?php $this->load->view('frontend/include/head');?>
<?php // echo $s_id;exit(); ?>
<link href="<?=site_url('assets/texas/')?>css/login.css?t=<?=time();?>" rel="stylesheet">
<div class="wrapper fadeInDown">
    <?php $this->load->view('notification-messages')?>
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
        <img src="<?=site_url('assets/images/login4.png')?>" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="<?=site_url('mainpage/generate_student_form/'.$s_id)?>" method="post">
        <select class="fadeIn second" name="department_id" id="login">
            <option value="">Select Department</option>
            <?php foreach($departments as $department){ ?>
            <option value="<?=$department->id?>"><?=$department->name?></option>
           <?php } ?>
        </select>
      <input type="submit" class="fadeIn fourth" value="Generate Form">
      
    </form>
    <!-- Remind Passowrd -->
<!--    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>-->

  </div>
</div>


<?php $this->load->view('frontend/include/footer');?>