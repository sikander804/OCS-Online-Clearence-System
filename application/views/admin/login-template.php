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

            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo"> 
                    <h1><?=SITE_NAME?></h1> <!-- this site title is constant value -->
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
                    
                    <form class="form-horizontal user" id="login-form" method="post" action="<?=site_url('admin/login')?>">
                    <div class="form-group form-group-user">
                        <label for="login-username" class="label-material">User Name</label>
                        <input id="login-username" type="text" name="user_name" required="" class="form-control form-control-user" autocomplete="off"> 
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="label-material">Password</label>
                        <input id="login-password" type="password" name="password" required="" class="form-control form-control-user" autocomplete="off">
                    </div>
                       
                         <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
<!--                                <label class="custom-control-label" for="customCheck">Remember
                                    Me</label>-->
                                <a class="float-right" href="<?=site_url('admin/forgot_password')?>">Forgot Password?</a>
                            </div>
                             
                        </div>
                        
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login" />
                   
                    

                  </form>
                 
                </div>
              </div>
          </div>
        </div>
      </div>          
      </div>          
    </div> 

