<!--  [ EPHP-Spoofer ](https://github.com/PulkitSingh256/EPHP-Spoofer)  -->
<!DOCTYPE html>
<html>
<body>

	<?php

	/* fetching user input */
	$fromname=$_POST['fromname'];
	$fromemail=$_POST['fromemail'];
	$replyname=$_POST['replyname'];
	$replyemail=$_POST['replyemail'];
	$email=$_POST['to'];
	$messagebox=$_POST['message'];
	$subjectbox=$_POST['subject'];
	
	$from	=  $fromname . ' <'.$fromemail.'> ';
	$replyto 	=  $replyname . ' <'.$replyemail.'> ';
	

	// composing email
	$to      = $email;
	$subject = $subjectbox;
	$message = $messagebox;


	// headers
	$headers  = "From: ".$fromFull . "\r\n";
	$headers .= "Reply-To: ".$replytoFull . "\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1" . "\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
	$headers .= "X-Priority: 1" . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	


	// output
	if (mail($to, $subject, $message, $headers)) echo $headers.'<p>EPHP Successfully Spoofed your Message</p>';
	else echo '<p>Error Sending The Email </p><a href="javascript:history.back()">Retry</a>';

	?>

</body>
</html>
