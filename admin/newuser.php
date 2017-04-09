<?php
  // include('siteurl.php');
  include('slider.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>create new user </title>
      <link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>admin/static/css/bootstrap.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="static/css/style.css"> -->
      <script src="<?php echo siteurl();?>admin/static/js/jquery-3.1.1.min.js"></script>
      <script src="<?php echo siteurl();?>admin/static/js/bootstrap.min.js"  ></script>
      <script src="<?php echo siteurl();?>admin/static/script/script.js"></script>
</head>
<body>
  <div class="container">
      <form method="post" action="controller.php" onsubmit="return validation()">
      <h4> create new user</h4>
      <div class="form-group">
      <label for="usr">email:</label>
      <input type="text" name="email" class="form-control" id="usr">
      </div>
      <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd">
      </div>
      
      <button type="submit" name="admin" value="submit" class="btn btn-success">submit</button><br /><br />
      </a> 
    </form>
  </div>  
</body>
</html>