<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "contact@yashs.me";
    $email_subject = "New Contact Form Submission";
    $email_body = "User Name: $name\n".
                    "User Email: $visitor_email\n".
                        "User Message: $message\n".
          
    $to = "contact@yashs.me"; 
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    echo 1;
    // header("Location: index.html");
    // echo "<script>window.close();</script>";
?>
