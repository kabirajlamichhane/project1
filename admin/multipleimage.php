<?php
	// include('siteurl.php');
	include('slider.php');
	$conn=new mysqli("localhost","root","","100");
	$sql="SELECT * FROM images";
	$result=mysqli_query($conn,$sql);

?>



<!DOCTYPE html>
<html>
<head>
	<title>for multiple image selction</title>
	<link rel="stylesheet" type="text/css" href=""<?php echo siteurl();?>admin/static/css/bootstrap.min.css">
    <script src=""<?php echo siteurl();?>admin/static/js/jquery-3.1.1.min.js"></script>
    <script src=""<?php echo siteurl();?>admin/static/js/bootstrap.min.js"  ></script>
    <script src=""<?php echo siteurl();?>admin/static/script/script.js"></script>
</head>
<body>

	<form method="post" action="controller.php" enctype="multipart/form-data">
	<div class="container">
	<h3>plz enter the filed</h3>
	<select name="pid">
	<?php while($res=mysqli_fetch_assoc($result))
	{
		echo"<option>{$res['id']}</option>";
	}
	?>
	</select><br><br/>
	<input type="file" name="image" class="btn btn-info"> <br><br />
		<input type="submit" name="select" value="select" class="btn btn-success">
		</div>
	</form>

</body>
</html>