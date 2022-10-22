<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF=8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $this->load->view('admin/includes/headcss');?>
    <?php $this->load->view('admin/includes/headscripts');?>
	<!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
            <link href="<?=site_url('assets/sb-admin/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
<div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo"> 
                    <h1><?=SITE_TITLE?></h1> <!-- this site title is constant value -->
                  </div>
                  <p><?=SITE_TITLE?> Adminstration Panel.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <?php $this->load->view('notification-messages');?>
                    
                    <form class="form-horizontal user" id="" method="post" action="<?=site_url('admin/forgot_password/forgot_pass')?>">
                    <div class="form-group form-group-user">
                        <label for="login-username" class="label-material">User Name</label>
                        <input id="login-username" placeholder="username" type="text" name="user_name" required="" class="form-control form-control-user" autocomplete="off"> 
                    </div>
                    <div class="form-group">
                        <label for="email" class="label-material">Email</label>
                        <input id="login-password" placeholder="Email" type="email" name="user_email" required="" class="form-control form-control-user" autocomplete="off">
                    </div>
                       
<!--                         <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember
                                    Me</label>
                                <a class="float-right" href="<?=site_url('admin/forgot-pass')?>">Forgot Password?</a>
                            </div>
                             
                        </div>-->
                        
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit" />
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                    

                  </form>
                    <!--<a href="#" class="forgot-pass">Forgot Password?</a>-->
                  <!--<br><small>Do not have an account? </small>-->
                  <!--<a href="register.php" class="signup">Signup</a>-->
                </div>
              </div>
          </div>
        </div>
      </div>          
      </div>          
    </div> 

