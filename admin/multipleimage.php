<?php
	include('slider.php');
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM images";
  $result=mysqli_query($conn,$sql);

?>



<!DOCTYPE html>
<html>
<head>
	<title>for multiple image selction</title>
	<h1>plz enter the filed</h1>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <script src="static/js/jquery-3.1.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"  ></script>
    <script src="static/script/script.js"></script>
</head>
<body>

	<form method="post" action="controller.php" enctype="multipart/form-data">
	<select name="pid">
	<?php while($res=mysqli_fetch_assoc($result))
	{
		echo"<option>{$res['id']}</option>";
	}
	?>
	</select><br><br/>
	<input type="file" name="image" class="btn btn-info"> <br><br />
		<input type="submit" name="select" value="select" class="btn btn-success">
	</form>

</body>
</html>