<?php
	$conn=new mysqli("localhost","root","","100");
	// $f_id=$_GET['f_id'];
	
	if(isset($_POST['forgot']))
	{	
		$email=$_POST['email'];	
		$sql="SELECT * FROM user WHERE email='$email'";
		$result=mysqli_query($conn,$sql);
		$cont= mysqli_num_rows($result);
		function makerandompassword()
		{
			$alphabet='abcdefghijklmnopABCDEFGHIJKLMNOP0123456789';
			$password=array();
			$alphabet_count=strlen($alphabet);
			for($i=0;$i<8;$i++)
			{
				$n=rand(0,$alphabet_count-1);
				$password[]=$alphabet[$n];
			}
				return implode($password);
		}
			$randompassword =makerandompassword();
			$pass= md5($randompassword);
			$sql= "UPDATE user SET password='$pass' WHERE email='$email' ";
			$res=mysqli_query($conn,$sql);
			if($res)
			{
				//echo "yse";
				header('location:dashboard.php');
			}
			else
			{
				echo "no";
			}





// 		$header="<a href=''>http://www.abc.com</a>";
 		$to="cloudkabiraj@gmail.com";
 		$from="cloudkabiraj@gmail.com";
 		$sub="about password";
 		$message="your password is".$randompassword;
 		//mail($from,$to,$sub,$message);


 		require '../phpmailer/PHPMailerAutoload.php';
		
	

		$mail = new PHPMailer;

		// $mail->SMTPDebug = 1;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'cloudkabiraj@gmail.com';                 // SMTP username
		$mail->Password = 'cloudkabiraj123';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		$mail->setFrom($from, 'Mailer');
		$mail->addAddress($to, 'Joe User');     // Add a recipient

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'password here';
		$mail->Body    = 'your password is'.$randompassword;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) 
		{
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 
		else 
		{
		    echo 'Message has been sent';
		}
	}
		?>