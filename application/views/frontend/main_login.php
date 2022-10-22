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
    <form action="<?=site_url('mainpage/login')?>" method="post">
        <input type="text" id="login" class="fadeIn second" name="username" required="" placeholder="username">
        <input type="password" id="password" class="fadeIn third" name="password" required="" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
      
    </form>
    <a href="<?=site_url('mainpage/register')?>" class="underlineHover mb-3">Sign up</a>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>


<?php $this->load->view('frontend/include/footer');?>