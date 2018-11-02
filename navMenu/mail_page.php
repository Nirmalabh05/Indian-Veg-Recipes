<?php
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $from = 'From: TangledDemo';
    $to = 'nirmalabh05@gmail.com'; 

    $body = "From: $name.\n". 
            "E-Mail: $email.\n ".
            "Message:$message.\n";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }
?>