<?php
	 include('slider.php');
	 $conn = new mysqli("localhost","root","",100);
	
	 
	 $id=$_GET['ad_id'];
	 $sql= "SELECT * FROM user where id='$id'";
	 $res=mysqli_query($conn,$sql);
	 $result=mysqli_fetch_assoc($res);
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>auth admin</title>
	<script src="JS/newscript.js"></script>
</head>
<body>
	<form method="post" action="controller.php?ad_id=<?php echo $id; ?>"  onsubmit= "return validation()">
	<div class="container">
	email<input type="text" name="email"  value="<?php echo  $result['email']; ?>"><br />
	password<input type="text" name="password"  value="<?php echo  $result['password']; ?>"><br />
	<input type="submit" name="adminupdate" value="UPDATE" class="btn btn-success">	
	</div>
	</form>
</body>
</html>