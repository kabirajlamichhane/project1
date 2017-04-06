<!DOCTYPE html>
<html>
<head>
	<title>just for verification</title>
	
</head>
<body>

</body>
</html>


<?php
	$header= "<h3>thankyou for registartion</h3><br/><a href=''>http://www.abc.com/verification</a>";

	$from="www.abc.com";
	$to="abc@gamil.com";
	$sub="yor password is";
	mail($from, $to, $sub,$header);
?>