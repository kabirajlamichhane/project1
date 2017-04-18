<?php
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM setting";
  $result=mysqli_query($conn,$sql);
  $res=mysqli_fetch_assoc($result);

// echo $res['logo'];

?>
<?php
    $conn=new mysqli("localhost","root","","100");
    $sql="SELECT * FROM site_url";
    $result1=mysqli_query($conn,$sql);
    $front=mysqli_fetch_assoc($result1);

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <a class="navbar-brand" href="navbar.php"><img src="<?php echo $front['url']; ?>/admin/logo/<?php echo $res['logo']; ?>" width="25px" height="25px;"></a>
      <a class="navbar-brand" href="http://eaglevisionit.com/"><?php echo $res['sitename']; ?></a>
       <a href="<?php echo $front['url']; ?>/public/menu.php">Request</a>
    
    
    </div>
  </div>
</nav>
  

		
