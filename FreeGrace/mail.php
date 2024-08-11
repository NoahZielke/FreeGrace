<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $message = $_POST['message'];
        $formcontent="From: $email  \nMessage: $message";
        $recipient = "freegracecentral@gmail.com";
        $subject = "You've been contacted";
        $mailheader = "From: faithal9@faithalone.net \r\n";
        mail($recipient, $subject, $formcontent, $mailheader);

        header("Location: add.html");
    }
?>
