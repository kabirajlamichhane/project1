<?php
	// include('slider.php');
	if(isset($_GET['error']) && $_GET['error']==1)
		echo "Please enter all the fields";
?>

<!DOCTYPE html>
<html>
<head>
	<title>new page</title>
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
      	<link rel="stylesheet" type="text/css" href="static/css/newpagestyle.css">
      	<script src="static/js/jquery-3.1.1.min.js"></script>
      	<script src="static/js/bootstrap.min.js"  ></script>
      	<script src="static/script/script.js"></script>
	<script src="script/newscript.js"></script>
</head>
<body>
	<form method="post" action="controller.php" enctype="multipart/form-data" onsubmit= "return validation()">
	<!-- TITLE:
	<input type="text" name="title"> <br> -->
	<div class="container">
	<div class="form-group">
      <label for="">title:</label>
      <input type="text" class="form-control" id="usr">
    </div>
	
	<div class="form-group">
      <label for="">Content:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
	<input type="file" name="image" class="btn btn-warning"><br><br/>
	<input type="submit" name="submit" value="ADD" class="btn btn-primary">	
	</div>
	</form>
</body>
</html>