<!DOCTYPE html>
<html lang = "en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel = "stylesheet" type = "text/css" href = "styles/default.css" />
	<title>Alston Brackett's | WEB250 Home |</title>
</head>
<body>
<header>
	<h1>Alston Brackett</h1>
	<nav>
		<a href="?p=home.php">Home</a> |
		<a href="?p=introduction.php">Introduction</a> |
		<a href="?p=contract.php">Contract</a> |
		<a href="?p=brand.php">Brand</a>
	</nav>
</header>
	<hr />
	<!-- dynamic content goes here -->

	<?php
		$sPage = $_GET["p"];
		//echo ("You picked the page: " . $sPage); 
		
		if($sPage == "") {  $sPage = "home.php"; }
		include($sPage);
	?>

	<hr />
	<footer> 
	<nav>
		<a href="https://github.com/wolfbaj">GitHub</a> |
		<a href="https://wolfbaj.github.io">GitHub.io</a> |
		<a href="https://wolfbaj.github.io/web250.io/">WEB250.io</a> |
		<a href="https://www.codecademy.com/profiles/wolfbaj">Codecademy</a> |
		<a href="https://www.freecodecamp.org/wolfbaj">FreeCodeCamp</a> |
		<a href="https://jsfiddle.net/user/wolfbaj/fiddles/">JSFiddle</a> |
		<a href="https://www.linkedin.com/in/alston-brackett-65a1642aa/">LinkedIn</a>
	</nav>
	<a href="http://validator.w3.org/check?uri=referer">
	  <img src="images/html_validation_button.gif" alt="Validate HTML">
	</a>
	 
	<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://alston.infinityfreeapp.com/">
	 <img src="images/validation_button_css_rectangle_blue.gif" alt="Validate CSS" >
	</a>
	</footer>
</body>
</html>