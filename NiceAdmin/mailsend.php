<?php
		
        $name=$_POST['name'];
        // echo "$name";exit;
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$text=$_POST['text'];
		$to="cloudkabiraj@gmail.com";
        $from="cloudkabiraj@gmail.com";
		$sub='tahnk you for subscribe us';
		$message='';
		$message.="NAME: $name"."\n"."<br>";
		$message.="EMAIL: $email"."\n"."<br>";
		$message.="PHONE: $phone"."\n"."<br>";
		$message.="TEXT: $text"."\n"."<br>";
		$message.="FROM: $from"."\n"."<br>";
		// $message.="To: $to"."\n"."<br>";
		$body=$message."\n"."<br>";
    
	   require '../phpmailer/PHPMailerAutoload.php';
    
  

    $mail = new PHPMailer;

    // $mail->SMTPDebug = 1;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'cloudkabiraj@gmail.com';                 // SMTP username
    $mail->Password = 'cloudkabiraj123';  
                             // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom($from, 'Mailer');
    $mail->addAddress($to, 'email');     // Add a recipient
    $mail->addReplyTO($email);
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = ' success';
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      // if($firstname && $email && $message){
      //   $header = "From: $firstname <$email>";
   


    if(!$mail->send()) 
    {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
  
    else 
    {
        echo 'Message has been sent'.$message;
        header("location:success.php");
        
    }


  

?>