<?php

	function pageid()
	{
		$conn=new mysqli("localhost","root","","100");
		$sql="SELECT * FROM pages";
		$result=mysqli_query($conn,$sql);
		$res=mysqli_fetch_assoc($result);
		return $res;
	}
?>