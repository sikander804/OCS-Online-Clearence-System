<?php $this->load->view('frontend/include/head');?>

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
    <form method="post" action="<?=site_url('mainpage/verify_user')?>">
      <input type="text" id="m_verification" class="fadeIn second" name="m_verification" placeholder="Verification Code">
      <input type="submit" class="fadeIn fourth" value="Verify">
      
    </form>
    <!-- Remind Passowrd -->
<!--    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>-->

  </div>
</div>


<?php $this->load->view('frontend/include/footer');?>