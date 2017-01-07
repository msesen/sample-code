<?php

    // Import PHPMailer library
    require_once 'phpmailer/PHPMailerAutoload.php';

    //Get form field value
    $to = $_POST["email"];

    // Set email content
    $footer = "The contents of this e-mail was manually shared from www.msesen.com. You're NOT subscribed and you will NOT receive any further e-mails.";
    $message = "Hi,\n\nThank you for your interest. please click on the following links to download the resume:\n\nPDF: http://www.msesen.com/documents/CV_Mehmet_Sesen.pdf\nDocx: http://www.msesen.com/documents/CV_Mehmet_Sesen.docx\n\n\n\n".$footer;

    // Create a new mail object and set it up
    $mail = new PHPMailer;

    // SMTP Settings - for Vidahost Cloud Hosting 
    $mail->isSMTP(); //Set PHPMailer to use SMTP.                              
    $mail->Host = "10.168.1.70";  //Set SMTP host name  
    $mail->SMTPAuth = false; //Set this to true if SMTP host requires authentication to send email     
    $mail->Port = 25; //Set TCP port to connect to 

    // Mail settings
    $mail->setFrom('hello@msesen.com', 'Mehmet Sesen');
    $mail->addAddress($to);
    $mail->addReplyTo("hello@msesen.com", "Reply"); //Address to which recipient will reply
    $mail->Subject  = 'Hello there, here are the links to Mehmet Sesen\'s Resume.';
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