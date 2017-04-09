 <?php
 	 include('siteurl.php');
	session_start();

	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	  }
?> 



<!DOCTYPE html>
<html>
<head>
  <title>dashboard</title>
  		<link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>admin/static/css/bootstrap.min.css">
      	<link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>admin/static/css/src.css">
      	<script src="<?php echo siteurl();?>admin/static/js/jquery-3.1.1.min.js"></script>
      	<script src="<?php echo siteurl();?>admin/static/js/bootstrap.min.js"  ></script>
      	<script src="<?php echo siteurl();?>admin/static/script/script.js"></script>
  
</head>
<body>
	<div class="container">
  	<div class="jumbotron">
		<a href="<?php echo siteurl();?>admin/pageview.php"><button type="button" class="btn btn-info">PAGE MANAGER</button></a>
		<a href="<?php echo siteurl();?>admin/multipleview.php"><button type="button" class="btn btn-sucess">IMAGE MANAGER</button></a>
		<a href="<?php echo siteurl();?>admin/configuration.php" ><button type="button" class="btn btn-warning">ADMIN MANAGER</button></a>
		<a href="<?php echo siteurl();?>admin/logout.php" ><button type="button" class="btn btn-danger">LOGOUT</button></a>
	</div>
	</div>	
</body>
</html>