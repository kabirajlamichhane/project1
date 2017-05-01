<?php
    include('link.php');
?>
<div>

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

                  <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="fa fa-bars"></i>
                  </div>

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

                    <li><a href="<?php echo siteurl();?>/NiceAdmin/logout.php"><span class="fa fa-user"></span>
                        logout</a>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>
        </header>      
        <!--header end-->

        <?php
        
            $conn=new mysqli("localhost","root","","100");
            $sql="SELECT * FROM pages WHERE parent_id=-1";
            $result1=mysqli_query($conn,$sql);
            //$res = mysqli_fetch_assoc($result);

        ?> 

     
         <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">                
                    <li class="active">
                        <a class="" href="<?php echo siteurl();?>/NicePublic/index.php">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="" href="<?php echo siteurl();?>/NicePublic/mainbody.php">
                            <i class="fa fa-address-card""></i>
                            <span>MENU</span>
                        </a>
                    </li>

                    <form method="post" action="testcontroller.php" onsubmit="return firstnamevalidation()" >
                    <?php while(  $res=mysqli_fetch_assoc($result1)){ ?>

                        <li><a onclick="ajaxbody(<?php echo $res['id'];?>)" data-toggle="collapse" data-target="#<?php echo $res['id']; ?>" href="#"><?php echo $res['title']; ?></a></li>

                        <?php

                            $id = $res['id'];
                            $sql = "SELECT * FROM pages WHERE parent_id=$id";
                            $result = mysqli_query($conn,$sql);
                            echo "<ul id=\"{$res['id']}\" class='collapse'>";
                            while($sub = mysqli_fetch_assoc($result))
                            {
                                echo "<li style='padding-left: 50px;'><a onclick=\"ajaxbody({$sub['id']})\" href='#'>{$sub['title']}</a></li>";
                            }
                            echo "</ul>";
                        ?>

                        <!-- <li>
                        <a class="navbar-toggle" data-toggle="collapse" data-target="#demo" href="#"><?php echo $res['title']?></a>
                        </li> -->
                    <?php } ?>  
                  </form>
                </ul>
              <!-- sidebar menu end-->