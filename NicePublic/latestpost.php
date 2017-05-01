<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body>

<?php include ('index.php') ?>
	  <div class="container" style="
    margin-left: 189px; margin-bottom: 50px; overflow-y: scroll;
">
    <?php

    // include ('siteurl.php');
    $site=siteurl();
		$conn=new mysqli("localhost","root","","100");
		$sql="SELECT * FROM post_manager ORDER BY id DESC LIMIT 3";
		$result=mysqli_query($conn,$sql);
		echo "<div class='row'>";
		while($res=mysqli_fetch_assoc($result))
		{
			$images = explode(",", $res['image']);
			$words = explode(" ", $res['post_contain']);

			?>
			 		<div class="col-sm-4">
			 		<div class="panel panel-primary" id="kabi">
		      		<div class="panel-heading"><?php echo $res['post_title']?></div>
		      		<?php for($i = 0; $i < 5; $i++)
		      		{
		      		if(!isset($words[$i]))
		      			break;
		      		echo "<span>$words[$i] </span>";
		      		}
		      		?>

		      		<img src="<?php echo $site ?>/NiceAdmin/sliderimage/<?php echo $images[0]; ?>" width='200px' height='200px;'>
		      		<a class="btn btn-primary" href="readmore.php?id=<?php echo $res['id'] ?>">Read More..</a>
		      		</div>
		      		</div>
    		

		<?php } ?>
		</div>
	

    <br>
    <a href="test.php" class="btn btn-primary">viewall </a>

</body>
<
</html>