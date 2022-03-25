<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'Update To Your Website GITHUB'
    $email_subject = 'New Message To Githubs Website'
    $email_body = "Name: $name.\n". 
                  "Email: $email.\n". 
                  "Phone: $phone.\n".
                  "Message: $message.\n";

    $to ="lalitbhattarai34@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");
?>