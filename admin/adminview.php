<?php
 		include('slider.php');
 		// include('siteurl.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome to viewchange</title>
	<link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>admin/static/css/bootstrap.min.css">
    <script src="<?php echo siteurl();?>admin/static/js/jquery-3.1.1.min.js"></script>
  	<script src="<?php echo siteurl();?>admin/static/js/bootstrap.min.js"  ></script>
    <script src="<?php echo siteurl();?>admin/static/script/script.js"></script>

	<!-- <script src="delscript.js"></script> -->
</head>
<body>
 	<form method="post" action="controller.php" >
 	
 	<div class="container">
 		 <table border='1px' class="table">
 		     <tr>
 		     	<th>id</th>
 		     	<th>email</th>
 		     	<th>password</th>
  		     	<th>action</th>
 		     </tr>
	
            <?php
                	include('crud.php');
					$obj = new crud();
					$result=$obj->change_select();
					foreach ($result as $row)
				 	{
    					echo"<tr>";
 		     			echo"<td>".$row['id']."</td>";
 		     			echo"<td>".$row['email']."</td>";
 		     			echo"<td>".$row['password']."</td>";
 		     			echo"<td><a href='editview.php?ad_id=$row[id]' onclick=\"return confirm('Are you sure?') \" class=\"btn btn-warning\">edit</a></td>";
 		     			echo"</tr>";
 					}  
			?>

 		 </table>
 	</div>	 	  
 	</form>
 	<div class="container">
 	<a href="updatesite.php" class="btn btn-danger">WEBSITE SETING</a>
 	</div>
</body>
</html>


 	

