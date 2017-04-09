<?php
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM setting";
  $result=mysqli_query($conn,$sql);
  $res=mysqli_fetch_assoc($result);

// echo $res['logo'];

?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <a class="navbar-brand" href="navbar.php"><img src="../admin/logo/<?php echo $res['logo']; ?>" width="25px" height="25px;"></a>
      <a class="navbar-brand" href="http://eaglevisionit.com/"><?php echo $res['sitename']; ?></a>
    
    
    </div>
  </div>
</nav>
  

		
