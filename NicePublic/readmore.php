<!DOCTYPE html>
<html lang="en">
<head>

  
</head>

<body>

<?php include ('index.php'); 
	$id = $_GET['id']; ?>
	  <div class="container" style="
    margin-left: 189px; margin-bottom: 50px; overflow-y: scroll;
">
    <?php

    // include ('siteurl.php');
    $site=siteurl();
		$conn=new mysqli("localhost","root","","100");
		$sql="SELECT * FROM post_manager WHERE id=$id";
		$result=mysqli_query($conn,$sql);

		
		while($res=mysqli_fetch_assoc($result))
		{

			$images = explode(",", $res['image']);
			

			?>
			 		
			 		<div class="panel panel-primary" id="kabi" style="padding-top: 100px">
		      		
		      		<div class="panel-heading"><?php echo $res['post_title']?></div>

					<div class="panel-body"><?php echo $res['post_contain']?></div>
					<?php for($i = 0; $i < count($images); $i++) {?>
			      		<img src="<?php echo $site ?>/NiceAdmin/sliderimage/<?php echo $images[$i]; ?>" width='200px' height='200px'>
		      		<?php } ?>
		      		</div>
		      		
    		

		<?php } ?>
		</div>
	

</body>

</html>