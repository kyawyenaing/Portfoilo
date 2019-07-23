<?php
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';
		
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "thushin27@gmail.com";		
		$mail->Password = "thushin2331992";
		$sender = $_REQUEST['email'];
		$mail->SetFrom($sender);
		$subject = $_REQUEST['subject'];
		$mail->Subject = $subject;
		$body = $_REQUEST['body'];
		$mail->Body = $body;
		$mail->AddAddress("thushin27@gmail.com");

		 if(!$mail->Send()) {
		    header("location:index.php?fail=$mail->ErrorInfo");
		    // header("location:".$_SERVER['HTTP_REFERER']);
		    exit;
		 } else {
		    header("location:index.php?pass=success");
		    exit;
		 }
		?>