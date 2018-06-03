<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		li.blue {
			color: blue;
			list-style-type: none;
		}
		li.blue a {
			text-decoration: none;
		}
		#change {
			display: block;
			background-color: cyan;
			text-align: center;
			color: red;
			text-decoration: underline;
			border: 3px solid blue;
			line-height: 40px;
		}
		a:hover {
			color: pink;
		}
		a:active {
			color: yellow;
		}
		/*a:visited {
			color: red;
		}*/
	</style>
</head>
<body>
	<p>
		<ul>
			<li class="blue"><a href="#">One</a></li>
			<li class="blue"><a href="#" id="change">Two</a></li>
			<li class="blue"><a href="#">
				Three
			</a>Hello Two</li>
		</ul>
	</p>
</body>
</html>