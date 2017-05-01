<?php
include('siteurl.php');
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
    <body>
    <!-- container section start -->
          <section id="container" class="">
             
              
              <header class="header dark-bg">

                    <!--logo start-->
                    <?php include('function.php'); 
                      $head= logo();
                      // print_r($head);
                    ?>
                    <!-- <a href="index.html" class="logo">EAGLEVISIONIT</a> -->
                   
             
                    <div class="toggle-nav">
                      <!--  logo  start-->
                      <a class="navbar-brand" href="#"><img src="logo/<?php echo $head['logo']; ?>" width="25px" height="25px;"></a>
                      <!-- end logo -->

                      <!-- sitename start -->
                      <a class="navbar-brand" href="#"><?php echo $head['sitename']; ?></a>
                      <!-- sitename end -->

                      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="fa fa-bars"></i></div>

                    </div>

                    

                    <div class="nav search-row" id="top_menu">
                        <!--  search form start -->
                        <ul class="nav top-menu">                    
                            <li>
                                <form class="navbar-form navbar-left" id="submit">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit" class="btn btn-default sub">Submit</button>
                                    </div>
                                </form>
                            </li>
                            <li><a href="<?php echo siteurl();?>/NiceAdmin/logout.php"><span class="fa fa-user"></span> logout</a></li>                    
                        </ul>
                        <!--  search form end -->                
                    </div>
              </header>      
              <!--header end-->

             
              <!--sidebar start-->
              <aside>
                  <div id="sidebar"  class="nav-collapse ">
                      <!-- sidebar menu start-->
                      <ul class="sidebar-menu">                
                          <li class="active">
                              <a class="" href="<?php echo siteurl();?>/NiceAdmin/index.php">
                                  <i class="icon_house_alt"></i>
                                  <span>Dashboard</span>
                              </a>
                          </li>
                          <li class="sub-menu">
                              <a href="<?php echo siteurl();?>/NiceAdmin/form_component.php" class="">
                                  <i class="icon_document_alt"></i>
                                  <span>PAGEMANAGER</span>
                              </a>
                              
                          </li>  

                          <li class="sub-menu">
                              <a href="<?php echo siteurl();?>/NiceAdmin/postmanager.php" class="">
                                  <i class="fa fa-book"></i>
                                  <span>POST MANAGER</span>
                              </a>
                          </li> 

                          <li class="sub-menu">
                              <a href="<?php echo siteurl();?>/NiceAdmin/multipleview.php" class="">
                                  <i class="icon_desktop"></i>
                                  <span>IMAGE MANAGER</span>
                              </a>
                            </li>  
                          <li>
                              <a class="" href="<?php echo siteurl();?>/NiceAdmin/configuration.php">
                                  <i class="icon_genius"></i>
                                  <span>ADMIN MANAGER</span>
                              </a>
                          </li>

                          <li>
                              <a class="" href="<?php echo siteurl();?>/NiceAdmin/newslettersubscriberview.php">
                                  <i class="fa fa-play-circle"></i>
                                  <span>NEWSLETTER</span>
                              </a>
                          </li>
                          
                          <li>                     
                              <a class="" href="">
                                  <i class="fa fa-cog"></i>
                                  <span>SETTING</span>
                                  
                              </a>
                                                 
                          </li>
                                     
                          <li class="sub-menu">
                              <a href="<?php echo siteurl();?>/NiceAdmin/logout.php" class="">
                                  <i class="fa fa-sign-out"></i>
                                  <span>LOGOUT</span>
                              </a>
                          </li>
          
                      </ul>
                      <!-- sidebar menu end-->
                  </div>
              </aside>
              <!--sidebar end-->
               
        <div>
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo siteurl();?>/NiceAdmin/index.php">Home</a></li>
                  </ol>
                </div>
              </div>

                    <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                       FORGOT PASSWORD
                                    </header>

                                    <div class="panel-body">
                                  <form method="post" action="<?php echo siteurl();?>/NiceAdmin/forgotpasswordmai.php">

                                    <!-- <input type="hidden" name="f_id"> -->
                                      <div class="container">
                                       <h3>please enter your email</h3>

                                       Email:<input type="text" name="email">
                                      
                                                    <button type="login" name="forgot" class="btn btn-danger">login</button>
                                    </div>
                                  </form>

                                    </div>
                              </section>
                             
                            </div>
                        </div>
                      <!-- Basic Forms & Horizontal Forms-->  
                     
                </section>
            </section>
              <!--main content end-->
        </div>      
               

          </section>
    </body>  




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
