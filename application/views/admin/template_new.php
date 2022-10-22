<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=SITE_TITLE?> Admin</title>


    <title><?=SITE_TITLE?> Administration Panel</title>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Favicon-->
    <link rel="icon" href="<?=site_url('favicon.png');?>">
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
       
    
    <!-- Custom fonts for this template-->
    <link href="<?=site_url('assets/sb-admin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link ref="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.0.0/flatly/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?= site_url('assets/datetimepicker/')?>build/css/bootstrap-datetimepicker.min.css">
    
    <link href="<?=site_url('assets/sb-admin/');?>css/sb-admin-2.min.css?v=3" rel="stylesheet">
    <link href="<?=site_url('assets/sb-admin/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   
    <script src="<?=site_url('assets/sb-admin/');?>vendor/jquery/jquery.min.js"></script>
    
 
    
    
    


    
</head>

<body id="page-top">

    <!-- Page Wrapper -->

    
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <?php $this->load->view('admin/includes/left-side-new');?>  

        <!--End Side Navbar -->        
        <div id="content-wrapper" class="d-flex flex-column" style="width: 100%">
            <div id="content">
             <?php $this->load->view('admin/includes/header');?>
        
          <!-- Page Header-->
          <div class="container-fluid" >
              <div class="breadcrumb-holder align-items-stretch" style="margin-top: 5px;">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/Dashboard')?>">Home</a></li>
                    <li class="breadcrumb-item active"><?=isset($page_title) ? $page_title:'';?></li>
                </ul>
              </div>
          <header class="page-header">
              <h2 class="h3 mb-0 text-gray-800"><?=$page_title;?></h2>           
          </header>
                    
          <?php $this->load->view($content_view);?>
          </div>
          
          <?php $this->load->view('admin/includes/sb-footer');?>
          </div>
          </div>
        </div>
    
    
    
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=site_url('admin/logout');?>">Logout</a>
                </div>
            </div>
        </div>
 </div>

  
    
    <script src="<?=site_url('assets/sb-admin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Custom scripts for all pages-->
    <script src="<?=site_url('assets/sb-admin/');?>js/sb-admin-2.min.js"></script>
    
 

    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
<script src="<?=site_url('assets/datetimepicker/')?>build/js/bootstrap-datetimepicker.min.js"></script>

  
    
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>  

          
          
          
          
          
          
          
<script src="<?=site_url('assets/sb-admin/');?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=site_url('assets/sb-admin/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
<script src="<?=site_url('assets/sb-admin/');?>js/demo/datatables-demo.js"></script>









</body>

</html>