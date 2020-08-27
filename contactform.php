<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "dchattz2@yahoo.com";
    $headers = "From: ".$mailFrom; 
    $txt = "You have receieved an email from ".$name.".\n\n".$message; 


    mail($mailTo, $subject, $txt, $headers);
    header("Location: right-sidebar.php?mailsend");
}

 