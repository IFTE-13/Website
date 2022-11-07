<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $emailFrom = 'website@gmail.com';
    $emailSubject = 'New from submission';
    $emailBody = 'User name: $name.\n'.
                 'User email: $email.\n'.
                 'User subject: $subject.\n'.
                 'User message: $message.\n';

    $to = 'ifte.phoenix@gmail.com'
    $headers = 'From: $emailFrom \r\n';
    $headers .= 'Reply-To: $email \r\n'

    mail($to, $emailSubject,$emailBody,$headers);
    header("Location: contact.html")
?>