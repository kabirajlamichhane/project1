<?php
  // include('slider.php');

  include('siteurl.php');
  session_start();

  if(!isset($_SESSION['email']))
  {
    header('location:index.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo siteurl();?>/NiceAdmin/img/favicon.png">

    <title>Admin</title>
    
    <!-- Bootstrap CSS -->    
    <link href="<?php echo siteurl();?>/NiceAdmin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo siteurl();?>/NiceAdmin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo siteurl();?>/NiceAdmin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo siteurl();?>/NiceAdmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="<?php echo siteurl();?>/NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo siteurl();?>/NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo siteurl();?>/NiceAdmin/css/owl.carousel.css" type="text/css">
    <link href="<?php echo siteurl();?>/NiceAdmin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo siteurl();?>/NiceAdmin/<?php echo siteurl();?>/NiceAdmin/css/fullcalendar.css">
    <link href="<?php echo siteurl();?>/NiceAdmin/css/widgets.css" rel="stylesheet">
    <link href="<?php echo siteurl();?>/NiceAdmin/css/style.css" rel="stylesheet">
    <link href="<?php echo siteurl();?>/NiceAdmin/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo siteurl();?>/NiceAdmin/css/xcharts.min.css" rel=" stylesheet"> 
    <link href="<?php echo siteurl();?>/NiceAdmin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!--my own css-->
    <link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>/NiceAdmin/css/temp.css">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->





  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>


</html>
