<?php
if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$conn=new mysqli("localhost","root","","100");
		$sql="DELETE FROM pages WHERE id='$id'";
		$result=mysqli_query($conn,$sql);
	}
if(isset($_GET['postid']))
	{
		$id=$_GET['postid'];
		$conn=new mysqli("localhost","root","","100");
		$sql="DELETE FROM post_manager WHERE id='$id'";
		$result=mysqli_query($conn,$sql);
	}
	if(isset($_GET['sliderid']))
	{
		$id=$_GET['sliderid'];
		$conn=new mysqli("localhost","root","","100");
		$sql="DELETE FROM sliderimage WHERE id='$id'";
		$result=mysqli_query($conn,$sql);
	}
?>