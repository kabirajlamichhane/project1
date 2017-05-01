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
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                     <div class="col-lg-12">
                                        
                                <div class="col-sm-10" id="main">
      
                                   <?php
                                        if(isset($_GET['title_id']))
                                        {
                                          $id=$_GET['title_id'];
                                          $conn=new mysqli("localhost","root","","100");
                                          $sql="SELECT * FROM pages WHERE id=$id";
                                          $res=mysqli_query($conn,$sql);
                                          while(  $result=mysqli_fetch_assoc($res))
                                          {
                                            echo $result['content'];
                                            echo"<a href=\"{$front['url']}/admin/image/{$result['image']}\" rel=\"prettyPhoto[gallery1]\">";
                                            echo "<img src=\"{$front['url']}/admin/image/{$result['image']}\" >";
                                            echo "</a>";
                                          }
                                        }
                                 // include('menu.php');  
                                    
                                    ?>  
                                  
                                  <?php
  
  // include('link.php');
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM country ORDER BY country_name";
  $result=mysqli_query($conn,$sql);
   // print_r($result);die;


?>


<head>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="static/css/datepicker.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
  <script src="static/script/validation.js"></script>

</head>
<body>


  <div class="container-fluid" id="main">
    <div class="page-header">
      <h1>PLEASE FILL THE FORM</h1>
    </div>
   
      <div class="col-sm-10" id="content">
      <form method="post" action="testcontroller.php" onsubmit="return allvalidation()">
         
      <div cla="from-group">
        <label>FIRSTNAME</label>

        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-user"></i>
            </span>
            <input type="text" name="firstname" class="form-control" id="fname" placeholder="first is required"/>
        </div>  
      </div><br><br/> 

      <div cla="from-group">
        <label>LASTNAME</label>

        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-user"></i>
            </span>
            <input type="text" name="lastname" class="form-control" id="lname" placeholder="first is required"/>
        </div>  
      </div><br><br/>

      <div class="from-group">
        <label>PHONENUMBER</label>

        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-mobile"></i>
            </span>
            <input type="text" name="phonenumber"  id="phone" class="form-control" placeholder="phone number is required"/>
        </div>  
      </div><br><br/>

      <div class="from-group">
        <label>EMIAL</label>

        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-envelope"></i>
            </span>
            <input type="text" name="email"  id="mail" class="form-control" placeholder="email is required"/>
        </div>  
      </div><br><br/>
      
      <div class="from-group">
        <label>COUNTRY</label>

      <div class="input-group">
          <span class="input-group-addon">
            <i class="fa fa-flag"></i>
          </span>
          <select class="form-control" name="Country">
            <?php
              while($res=mysqli_fetch_assoc($result)) {?>
              {
                <option ><?php echo $res['country_name']." ".$res['country_code']; ?></option>";
              }
            <?php }?>
          </select>  
        </div>  
      </div><br><br/>
          
      <div class="from-group">
        <label>STATE/PROVINCE</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-globe"></i>
            </span>
            <select class="form-control" name="state">
              <option>STATE/PROVINCE</option>
            </select>
        </div>
      </div><br><br />

      <div class="from-group">
        <label>CITY</label>
        <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-road"></i>
            </span>
            <select class="form-control" name="city">
              <option>city</option>
            </select>
        </div>
      </div><br><br />

      <div class="from-group">
          <label>POSTAL CODE</label>
          <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-tags"></i>
              </span>
              <select class="form-control" name="postalcode">
                <option>POSTALCODE</option>
              </select>
          </div>
      </div><br><br />

      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </span>
          <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="text"/>
          </div>  
      </div>
     
      <script>
          $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
              format: 'mm/dd/yyyy',
              container: container,
              todayHighlight: true,
              autoclose: true,
            };
            date_input.datepicker(options);
          })
      </script><br><br />


      <div class="form-group">
        <label >CONTACT ME</label>
          <div class="checkbox" name="contactme">
            <i class="fa fa-phone"></i>
            <label><input type="checkbox" name="contactme_phone" value="phone">phone</label>
          </div>
          <div class="checkbox">
            <i class="fa fa-envelope"></i>
            <label><input type="checkbox" name="contactme_mail" value="email">email</label>
          </div>
          <div class="checkbox">
            <i class="fa fa-plane"></i>
            <label><input type="checkbox" name="contactme_post" value="post">post</label>
          </div>
        </div>

        <div class="from-group">
          <label>gender</label>
          <div class="radio" name="optradio">
            <i class="fa fa-male"></i>
            <label ><input type="radio"  name="optradio" value="male">MALE</label>
          </div>
          <div class="radio">
            <i class="fa fa-female"></i>
            <label><input type="radio" name="optradio" value="female">FEMALE</label>
          </div>
        </div><br><br/>

        <div class="from-group">
          <label>OTHER NOTES</label>
          <textarea class="form-control" rows="5" name="othernotes"></textarea>
        </div><br><br />

        <div class="robotic" id="pot">
          <!-- <label>If you're human leave this blank:</label> -->
          <input name="robotest" type="hidden" id="robotest" class="robotest" />
        </div>
        <div class="from-group">
          <button type="submit" name="submit" value="submit" class="btn btn-info">submit</button> 
        </div>
   </form>
  </div>
</div>
</body>
     <script>

                                  function ajaxbody(title){
                                      
                                        $.ajax({
                                            type:'GET',
                                            url: "kabi.php", 
                                            data:{
                                              title_id: title
                                            },
                                            success: function(data){
                                            $("#main").html(data);
                                          

                                        }

                                      });
                                  }
                            </script>    

  </div>
</div> 