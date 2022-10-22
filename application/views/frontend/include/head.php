<?php 
//If the HTTPS is not found to be "on"
/*if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>OCS</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <meta name="google" content="notranslate" />
    
    <!-- Favicons -->
    <link href="<?=site_url('assets/uploads/')?>logo2.png" rel="icon">
    <link href="<?=site_url('assets/texas/')?>img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    
    <!-- Vendor CSS Files -->
    <link href="<?=site_url('assets/texas/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=site_url('assets/texas/')?>vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?=site_url('assets/texas/')?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?=site_url('assets/texas/')?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=site_url('assets/texas/')?>vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
    <link href="<?=site_url('assets/texas/')?>css/style.css?t=<?=time();?>" rel="stylesheet">
    
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
          
</head>

<body>

  