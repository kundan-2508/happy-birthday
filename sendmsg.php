<?php

	$msg =  trim($_POST['reply']);
	if($msg == "")
	{
		echo "Your msg is empty";
	}
	else
	{
		$to = 'kun123658@gmail.com';
		$subject = 'Response';
		$from = 'birthday@gmail.com';
 
		// Create email headers
		$headers = 'From: '.$from;
    	$message = $msg;
    	if(mail($to, $subject, $message, $headers))
		{
		    echo 'Thankyou for your reply.';
		}
		else
		{
		    echo 'Unable to send reply..Please try again.';
		}
	}
