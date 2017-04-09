<?php
	// include('siteurl.php');
	include('slider.php');
	$conn = new mysqli("localhost","root","",100);
	
	if(isset($_GET['edit_id']))
	{
		$id=$_GET['edit_id'];
		$sql= "SELECT * FROM pages where id='$id'";
		$res=mysqli_query($conn,$sql);
		$result=mysqli_fetch_assoc($res);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>new page</title>
	<script src="<?php echo siteurl();?>admin/JS/newscript.js"></script>
	<script src="<?php echo siteurl();?>admin/ckeditor/ckeditor.js"></script>
</head>
<body>
	<form method="post" action="controller.php?edit_id=<?php echo $id; ?>" enctype="multipart/form-data" onsubmit= "return validation()">
	
	<div class="container">
	<input type="hidden" name="id" value="<?php echo $id?>">
	TITLE:
	&nbsp &nbsp &nbsp &nbsp<input name="title"  value="<?php echo $result['title']; ?>" ><br />
	CONTENT:
	<textarea name="content" rows="5" cols="50" ><?php echo  $result['content']; ?></textarea><br />
	<input type="file" name="image" class="btn btn-warning" value="<?php echo  $result['image']; ?>"/><br/>
	<!-- <input type="hidden" name="$img" value="<?php echo $img;?>" /> -->
	<input type="submit" name="update" value="EDIT" class="btn btn-success">
	</div>	
	</form>
</body>
</html>
<script >
	CKEDITOR.replace('content');
</script>