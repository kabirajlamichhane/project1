<?php
	 include('slider.php');
	session_start();

	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>well come to configuration site</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <script src="static/js/jquery-3.1.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"  ></script>
    <script src="static/script/script.js"></script>
</head>
<body>
    <form method="post" action="admincontroller.php">
    <div class="container">
    
    	<h3>just for configuration</h3> 
     	email &nbsp  &nbsp  &nbsp<input type="text" name="email" placeholder="your eamil"><br><br />
     	password<input type="password" name="password" placeholder="your password"><br><br />
     	<input type="submit" name="check" value="update" class="btn btn-info"><br><br/>
        <a href="newuser.php" class="btn btn-success">create a new user</a>

    </div> 	
    </form>
</body>
</html>