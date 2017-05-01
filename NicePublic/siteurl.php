<?php

		 function siteurl()
		{
			$conn=new mysqli("localhost","root","","100");
			$sql="SELECT * FROM site_url";
			$result=mysqli_query($conn,$sql);
			$res=mysqli_fetch_assoc($result);

			 return $res['url'];
		}

		
?>