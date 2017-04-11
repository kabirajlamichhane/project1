<?php
  if(isset($_POST['submit']))
  {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $Country =$_POST['Country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $postelcode=$_POST['postelcode'];
    $date=$_POST['date'];
    $contactme=$_POST['contactme'];
    $gender=$_POST['optradio'];
    $othernotes=$_POST['othernotes'];
    $to="cloudkabiraj@gmail.com";
    $from="cloudkabiraj@gmail.com";
    $sub=" Quote request from My Website ";
   
     // echo $message;
    $robotest = $_POST['robotest'];


    

    $message ="";
    $message ="from email:".$email."\n"."<br>";
    $message .="from name:".$firstname.$lastname."\n"."<br>";
    $message .="to:"."kabiraj@gmail.com"."\n"."<br>";
    $message.=$date."\n"."<br>";
    $message.=$address."\n"."<br>";
    $message.=$Country."\n"."<br>";
    $message.=$state."\n"."<br>";
    $message.=$city."\n"."<br>";
    $message.=$postelcode."\n"."<br>";
    $message.=$othernotes."\n"."<br>";
     $body="Hi Admin,  
        You’ve received a quote request from website on".$message;
    
  }


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

    $mail->Subject = ' Quote request from My Website';
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($robotest)
    {
      $error = "You are a gutless robot.";
    }
    else
    {
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
    }
  
    
}

?>