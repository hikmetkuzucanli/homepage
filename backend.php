<?php
    $email = $_POST["email"];
    $name = $_POST["name"];
    $msg = $_POST["message"];

    $to = $_POST["mail@hikmetkuzucanli.de"];
    $subject = "Neue Nachricht";
    $body = "Hey, du hast eine neue Nachricht erhalten. Die Email Adresse lautet".$email.". Der Name lautet".$name.". Und die übermittelte Nachricht lautet:".$msg;

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "efolg";
    } else {
        echo "es ist ein fehler aufgetreten.";
    }