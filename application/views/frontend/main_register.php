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
    <form method="post" action="<?=site_url('mainpage/register_user')?>">
        <input type="text" id="login" class="fadeIn second" name="full_name" required="" placeholder="Full Name">
        <input type="text" id="login" class="fadeIn second" name="father_name" required="" placeholder="Father Name">
        <input type="text" id="login" class="fadeIn second" name="username" required="" placeholder="Username">
        <select class="fadeIn second" name="student_status" id="login">
            <option value="">Select Open/Self</option>
            <option value="Self">Self</option>
            <option value="Open">Open</option>
        </select>
        <input type="email" id="email" class="fadeIn second" name="email" required="" placeholder="Email">
        <input type="password" id="password" class="fadeIn third" name="password" required="" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Register">
      
    </form>
    <a href="<?=site_url('mainpage')?>" class="fadeIn fourth underlineHover mb-3">Already have account? Login</a>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>


<?php $this->load->view('frontend/include/footer');?>