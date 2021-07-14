<?php

if (isset($_POST['submit'])) {
    $mailFrom = $_POST['email'];

    $mailTo = "augustineugbaja97@gmail.com";
    $headers = "From: ".$mailFrom;

    mail($mailTo, $headers);
    header("Location: index.php?mailsend");
}