<!DOCTYPE html>
<html>
<head>
  <title>slider</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
        <?php
          $a=0;
          $conn=new mysqli("localhost","root","","100");
          $sql="SELECT * FROM sliderimage";
          $result=mysqli_query($conn,$sql);
          // print_r($result);die;
          while($res=mysqli_fetch_query($result))
            {
              ?>
              <li data-target="#myCarousel" data-slide-to="<?php echo $a++;?>">

              </li>
              <?php
            }
        ?>
        </ol>


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <?php
          $conn=new mysqli("localhost","root","","100");
          $sql="SELECT * FROM sliderimage";
          $result=mysqli_query($conn,$sql);
          if(!$result)
          {
            mysqli_error($conn);
          }
            print_r($result);die;
          while($image=mysqli_fetch_query($result)) 
            {
              ?>
              <div class="item">
              <img src="sliderimage/<?php echo $image['sliderimage']; ?>"
              class="img responsive" alt="<?php $image['sliderimage'];?>">   
              </div>
              <?php
            }
          ?>


      
    </div>

   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>