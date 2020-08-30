<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
	$u_name = $_POST["user_name"]; //set PHP variables like this so we can use them anywhere in code below
	$u_email = $_POST["user_email"];
	$u_text = $_POST["user_text"];
	
	//print output text
	print "Hello " . $u_name . "!, we have received your message and email ". $u_email;
	print "We will contact you very soon!";
}
?>