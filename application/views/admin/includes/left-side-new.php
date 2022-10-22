

<?php

$user_id = $this->session->userdata('admin_user_session_id');   
//print_r($user_id);
//exit();
$user_data = GetUser($user_id);
if(isset($user_data->user_role_id) && intval($user_data->user_role_id) > 0){
    $user_role = GetRole($user_data->user_role_id);
    $user_role_name = $user_role->name;
}else{
    _setError('Your are not allowed to access administration panel');
    redirect(site_url('admin'));
    exit();
}



?>


<style>
    #side-hover-nav ul li a:hover{
        background: #D14;
    }
</style>


<nav class="side-navbar" id="side-hover-nav">
    <!-- Sidebar Header-->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!--<img src="<?= site_url('assets/uploads/logo.png')?>" alt="" style="height: 81px;width: 224px;">-->
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=site_url('admin/dashboard')?>">
                <div class="sidebar-brand-icon">
                   <!--<img src="<?= site_url('assets/uploads/logo.png')?>" style="height: 81px;width: 224px;" alt="">-->
                </div>
                <div class="sidebar-brand-text mx-3">OCS Administration
              </div>
            </a>
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-4" href="<?=site_url('admin/dashboard')?>">
                <div class="sidebar-brand-icon sidebar-brand-text">
                   <img src="<?= site_url('assets/uploads/logo2.png')?>" style="height: 98px;width: 224px;" alt="">
                </div>
               
            </a>
            

            <!-- Divider -->
            <!--<hr class="sidebar-divider my-0">-->

            <!-- Nav Item - Dashboard -->
           
            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/dashboard/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>

            </li>

            
             <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/users/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Manage Users</span></a>

             </li>
            

            <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/roles/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Manage User Roles</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/departments/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Manage Departments</span></a>
             </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/forms/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Student Forms</span></a>
            </li>
      <?php if($user_role_name == 'admin' || $user_role_name == 'chairmain'){ ?>
            <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/department_forms/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Department Forms</span></a>
            </li>
      <?php } ?>
      <?php if($user_role_name == 'admin' || $user_role_name == 'provost'){ ?>      
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/provost/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Provost Activity</span></a>
            </li>
      <?php } ?>      
      <?php if($user_role_name == 'admin' || $user_role_name == 'library'){ ?>      
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/library/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Library Forms</span></a>
            </li>
      <?php } ?>  
      <?php if($user_role_name == 'admin' || $user_role_name == 'sports'){ ?>     
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/sports/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Sports Forms</span></a>
            </li>
      <?php } ?>      
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/final_forms/');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Final Forms</span></a>
            </li>
            

  


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
</nav>