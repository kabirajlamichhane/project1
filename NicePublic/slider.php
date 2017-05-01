<?php include('index.php'); ?>
<body>
<?php 
  // require 'siteurl.php';
  $site = siteurl();
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM sliderimage ORDER BY id ASC";
  $set=mysqli_query($conn,$sql);
  $img = mysqli_fetch_assoc($set);
   
?>
<div class="container" style="
    padding-left: 99px;
    padding-top: 70px;
">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel"  >
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <?php 
      //$row = 0;
    ?>
      <div class="item active">
        <div class="item">
            <img src="<?php echo $site ?>/NiceAdmin/sliderimage/<?php echo $img['sliderimage']  ?>" alt="Chania" width="460" height="345">
            <div class="carousel-caption">
              <h3><?php echo $img['title'];?></h3>
              <p><?php echo $img['description']?></p>
            </div>
          </div>
      </div>

      <?php 
        while($image = mysqli_fetch_assoc($set)){ 
           // if($row == 0) {$row++; continue;} 
          //print_r($image);
          // echo mysqli_mum_rows
          ?>
          
        

  
     


          <div class="item">
            <img src="<?php echo $site ?>/NiceAdmin/sliderimage/<?php echo $image['sliderimage']  ?>" alt="Chania" width="600" height="400">
            <div class="carousel-caption">
              <h3><?php echo $img['title'];?></h3>
              <p><?php echo $img['description']?></p>
            </div>
          </div>
        
     <?php 
        
} ?>

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
</div>

</body>
</html>
