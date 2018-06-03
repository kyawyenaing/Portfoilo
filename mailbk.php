<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<header class="clear-fix center">
			<div class="name">
				<img src="assets/images/profile.jpeg">
			</div>
			<div class="skills">
				<h4>Hello</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</p>
				<h4>My Solid Skills</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</p>
			</div>
		</header>
	</div>
	<div class="story">
		<article>
			<h4>Senior Web Deveoper</h4>
			<h5>Aries-WebSolutions</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<hr>
			<h4>Senior Web Deveoper</h4>
			<h5>Aries-WebSolutions</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<hr>
			<h4>Senior Web Deveoper</h4>
			<h5>Aries-WebSolutions</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<hr>
			<h4>Senior Web Deveoper</h4>
			<h5>Aries-WebSolutions</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<hr>
		</article>
	</div>
	<div class="contact">
		<a href="mailto:example@tutorialspark.com?cc=admin@example.org,tutorialspark@gmail.com">Send an Email </a>
		<?php
		//if "email" variable is filled out, send email
		  if (isset($_REQUEST['email']))  {
		  
		  //Email information
		  $recipient = "thushin27@gmail.com";
		  $email = $_REQUEST['email'];
		  $subject = $_REQUEST['subject'];
		  $comment = $_REQUEST['comment'];
		  
		  //send email
		  $success = mail($recipient, $subject, $comment, "From:" . $email);
		  if($success==true) {
		  	//Email response
		  echo "Thank you for contacting us!";
		} else {
			echo $recipient.$email.$subject.$comment."<br/>";
			echo "Wrong";
		}
		  
		  }
		  
		  //if "email" variable is not filled out, display the form
		  else  {
		?>

		 <form method="post">

		  Email: <input name="email" type="text" />

		  Subject: <input name="subject" type="text" />

		  Message:

		  <textarea name="comment" rows="15" cols="40"></textarea>

		  <input type="submit" value="Submit" />
		  </form>
		  
		<?php
		  }
		?>
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Up to TOp</button>
</body>
<script type="text/javascript">
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	        document.getElementById("myBtn").style.display = "block";
	    } else {
	        document.getElementById("myBtn").style.display = "none";
	    }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0;
	    document.documentElement.scrollTop = 0;
	}
</script>
</html>

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
		$mail->SetFrom("mgye333@gmail.com");
		$mail->Subject = "Test";
		$mail->Body = "hello";
		$mail->AddAddress("thushin27@gmail.com");

		 if(!$mail->Send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		 } else {
		    echo "Message has been sent";
		 }
		?>