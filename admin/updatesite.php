<?php
	// include('siteurl.php');
	include('slider.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>update logo and site name</title>
	  <link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>admin/static/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>admin/static/css/update.css">
      <script src="<?php echo siteurl();?>admin/static/js/jquery-3.1.1.min.js"></script>
      <script src="<?php echo siteurl();?>admin/static/js/bootstrap.min.js"  ></script>
      <script src="<?php echo siteurl();?>admin/static/script/script.js"></script>
<body>


	<div class="container">
	<h2 class="btn btn-primary">SITE SETTING</h2>
  		<form method="post" action="controller.php" enctype="multipart/form-data">
	    	<div class="form-group">
		      <label >YOUR SITE NAME</label>
		      <input type="text" class="form-control" name="sitename">
	    	</div>

	    	<div class="form-group">
		      <label >footer</label>
		      <input type="text" class="form-control" name="footername">
	    	</div>

	    	<div class="form-group">
		      <label >LOGO</label>
		      <input type="file" class="btn btn-success" name="logo">
	    	</div>
	    	<div class="form-group">
		    	<input type="submit" name="siteupdate" value="update" class="btn btn-danger">
	      	</div>
	    </form>
	</div>
</body>
</html>