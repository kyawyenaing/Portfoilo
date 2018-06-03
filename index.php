<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
</head>
<body>
	<div class="container wow fadeInDown" data-wow-delay="0.45s" data-wow-duration="5s">
		<div class="header">
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
			</article>
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
			</article>
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
			</article>
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
			</article>
		</div>
		<div class="contact">
			<article>
				<a href="mailto:example@tutorialspark.com?cc=admin@example.org,tutorialspark@gmail.com">Send an Email </a>
				<? if( isset($_GET['pass']) and $_GET['pass'] == "success"): ?>
				  <div class="error">I've been receieved your email.</div>
				<? endif; ?>
				<? if( isset($_GET['fail'])): ?>
				  <div class="error"><?echo $_GET['fail']?></div>
				<? endif; ?>
				<form method="post" action="mail.php">
					<label name="email">Your Email Address</label><br/>
					<input name="email" type="email"/><br/>
					<label name="subject">Subject</label><br/>
					<input name="subject" type="text" /><br/>
					<label>Write Here Your Message and Send to Me</label><br/>
				 	<textarea name="body" rows="15" cols="40"></textarea><br/>
				 	<input type="submit" value="Submit" />
				</form>
			</article>
		</div>
		<button onclick="topFunction()" id="myBtn" title="Go to top">Up to TOp</button>
	</div>
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
<script src="assets/js/wow.js"></script>
<script>
	new WOW().init();
</script>
</html>