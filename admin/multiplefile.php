<?php
      include('slider.php');
?>  


<!DOCTYPE html>
<html>
<head>
	<title>well come to new site</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <script src="static/js/jquery-3.1.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"  ></script>
    <script src="static/script/script.js"></script>
	
<body>
  
   <form method="post" action="controller.php" enctype="multipart/form-data">
  
   <div class="container">
   <h3>MULTIPLE FILE</h3>
</head>
   <input type="file" name="img[]" multiple="" class="btn btn-primary"><br><br />
   <input type="submit" name="uplode" value="uplode" class="btn btn-success">

   </div>
   </form>
</body>
</html>







