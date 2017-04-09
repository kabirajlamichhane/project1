<?php
	include('slider.php');
	// include('siteurl.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>forgotpassword</title>
	
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <script src="<?php echo siteurl();?>admin/static/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo siteurl();?>admin/static/js/bootstrap.min.js"  ></script>
    <script src="<?php echo siteurl();?>admin/static/script/script.js"></script>
	
</head>
<body>
<form method="post" action="forgotpasswordmai.php">
<!-- <input type="hidden" name="f_id"> -->
<div class="container">
<h3>please enter your email</h3>
	Email:<input type="text" name="email">
	<button type="login" name="forgot" class="btn btn-danger">login</button>
	</div>
</form>
</body>
</html>
<form></form>