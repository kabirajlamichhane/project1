<?php
	function logo()
	{
		$conn=new mysqli("localhost","root","","100");
		$sql="SELECT * FROM setting";
		$result=mysqli_query($conn,$sql);
		$res=mysqli_fetch_assoc($result);
		return $res;
	}

?>