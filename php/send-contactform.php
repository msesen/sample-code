<?php
    				
    // Import PHPMailer library
    require_once 'phpmailer/PHPMailerAutoload.php';

    // Set the receiver for the contact form
    $to = "hello@msesen.com";

    // Get form field value and sanitise
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject= filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
     // Set email content
    $footer = "Sent from the contact form located at www.msesen.com";
    $message = $name."\n".$from."\n\n".$message."\n\n\n\n".$footer;

    // Create a new mail object and set it up
    $mail = new PHPMailer;

    // SMTP Settings - for Vidahost Cloud Hosting 
    $mail->isSMTP(); //Set PHPMailer to use SMTP.                              
    $mail->Host = "10.168.1.70";  //Set SMTP host name
    $mail->SMTPAuth = false; //Set this to true if SMTP host requires authentication to send email     
    $mail->Port = 25; //Set TCP port to connect to 

    // Mail settings
    $mail->setFrom("hello@msesen.com", $name);
    $mail->addAddress($to);
    $mail->addReplyTo($from, "Reply"); //Address to which recipient will reply
    $mail->Subject  = $subject;
    $mail->Body     = $message;

    // Try sending the mail
    if(!$mail->send()) {
        $response = ["email_sent"=>false];
    } 
    else {
      $response = ["email_sent"=>true];
    }
    
    //Return Array object to ajax call
    echo json_encode($response);
    
?>
