
<?php

$session_id = $this->session->userdata('user_session_id');
$session_username = $this->session->userdata('user_session_name');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>OCS</title>
<!--  <style>
      body{
          font-size:17px;
      }
  </style> -->
</head>

<body>
  <!-- START HERE -->
   <style>
      .dropdown:hover .dropdown-content{
          display:block;
      }
      
/*      #2-nav ul a {
          color:#000;
      }*/
  </style>
  
  <nav id="1-nav" class="navbar navbar-expand-sm navbar-dark bg-dark d-none d-sm-none d-md-block d-lg-block mb-5">
        <div class="container">
                <a class="navbar-brand border-nav"  data-toggle="dropdown" id = "dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"s href="#">
                    OCS
                    <span style="border-right: 2px solid #fff;padding-right: 12px;"></span>
                </a>
                
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="https://awkum.edu.pk/contact/" target="_blank">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://awkum.edu.pk/admissions/" target="_blank">Admissions</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if(!empty($session_username) && intval($session_id) > 0){ ?>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="#">
                            Welcome <?=$session_username?>
                        </a>
                       
                    </li>
                    <li class="navbar-nav ml-auto">
                        <a class="nav-link" href="<?=site_url('mainpage/logout')?>">
                            Logout   <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                     <?php }else{ ?>
                    <li>
                        
                        <a class="nav-link" href="<?=site_url('mainpage/')?>">
                            Login   <i class="fas fa-user"></i>
                        </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



<style>
    .li-item{
      font-size: .8rem;  
    }
    
    #footer-last .cpa-footer-items li{
       padding-bottom: 10px;
    }
    
</style>