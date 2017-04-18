<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/nav.css">
  <script src="static/js/jquery-3.1.1.min.js"></script>
  <script src="static/js/bootstrap.min.js"  ></script>
    
</head>
<body>
 <?php
    include('topheader.php');
?> 
<?php
    $conn=new mysqli("localhost","root","","100");
    $sql="SELECT * FROM pages";
    $result=mysqli_query($conn,$sql);
  

?>
  <div class="container-fluid content">
    <div class="col-sm-2 content1" style="background-color: black;">
      <ul class="nav nav-pills nav-stacked">
       <?php while(  $res=mysqli_fetch_assoc($result)){ ?>
        <li><a href="nav.php?title_id=<?php  echo $res['id'] ; ?>" ><?php  echo $res['title']; ?></a></li>
        <?php } ?>      
      </ul>
    </div>
     

      <div class="col-sm-10">
      <?php
        if(isset($_GET['title_id'])) {
        $id=$_GET['title_id'];
        $conn=new mysqli("localhost","root","","100");
        $sql="SELECT * FROM pages WHERE id=$id";
        $res=mysqli_query($conn,$sql);
        while(  $result=mysqli_fetch_assoc($res))
        {
          echo $result['content'];
        }
      }
      
      


?>  

        
      
      
      </div>
      
     
  </div>  
      
  <?php include('footer.php')?>
  
</body>
</html>