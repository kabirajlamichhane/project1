<?php
include('test.php');
?>

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
            

  </section>
</body>  