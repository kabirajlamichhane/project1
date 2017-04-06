<?php
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM setting";
  $result=mysqli_query($conn,$sql);
  $res=mysqli_fetch_assoc($result);

// echo $res['logo'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
  <script src="static/js/jquery-3.1.1.min.js"></script>
  <script src="static/js/bootstrap.min.js"  ></script>
      
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    
      <li><a href="navbar.php"><img src="../admin/logo/<?php echo $res['logo']; ?>" width="40px" height="40px;">eagle</a></li>
      <li><a href="index.php"><?php echo $res['sitename']; ?></a></li>
    
    
    </ul>
  </div>
</nav>
  
</body>
</html>
		
