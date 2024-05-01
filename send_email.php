<?php
if($_POST) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    
    $to = "deandie17@gmail.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    $msg = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
    
    if(mail($to, $subject, $msg, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>