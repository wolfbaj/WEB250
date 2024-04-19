<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel = "stylesheet" type = "text/css" href = "styles/default.css" />
		<?php
			$page = 'Home';
		if (!empty($_GET['page'])) {
			$page = '';
			$page .= ucfirst($_GET['page']);
		}
		?>
		<title>Alston Brackett's Annoyed Bulldog | WEB250 | <?= ' ' . $page ?></title>
	</head>
	<body>
		<header>
		<h1>Alston Brackett's Annoyed Bulldog | WEB250</h1>
		<nav>
			<a href="index.php?page=home">Home</a> |
			<a href="index.php?page=introduction">Introduction</a> |
			<a href="index.php?page=contract">Contract</a> |
			<a href="index.php?page=brand">Brand</a> |
			<a href="index.php?page=forms">Forms</a> |
			<a href="index.php?page=fizbuzz">Fizz Buzz</a>
		</nav>

		</header>
	
	<!-- dynamic content goes here -->
	<main>
	<h2><?= $page ?></h2>
	<?php
	$url = 'contents/home.php';
	if (!empty($_GET['contents'])) {
		$url = 'contents/';
		$url .= $_GET['contents'] . '/';
	}
	if (!empty($_GET['page'])) {
		$url = 'contents/';
		$url .= $_GET['page'] . '.php';
	}
	include $url;
	?>
	</main
	<footer> 
	<nav>
		<a href="https://github.com/wolfbaj">GitHub</a> |
		<a href="https://wolfbaj.github.io">GitHub.io</a> |
		<a href="https://wolfbaj.github.io/web250.io/">WEB250.io</a> |
		<a href="https://www.codecademy.com/profiles/wolfbaj">Codecademy</a> |
		<a href="https://www.freecodecamp.org/wolfbaj">freeCodeCamp</a> |
		<a href="https://jsfiddle.net/user/wolfbaj/fiddles/">JSFiddle</a> |
		<a href="https://www.linkedin.com/in/alston-brackett-65a1642aa/">LinkedIn</a>
	</nav>
	<h3 class="alignLeft">Designed by: BPCB inc</h3>
	<figure>
	<a href="http://validator.w3.org/check?uri=referer">
	  <img src="images/html_validation_button.gif" alt="Validate HTML">
	</a>
	 
	<a href="http://jigsaw.w3.org/css-validator/validator?uri=https://http://alston.infinityfreeapp.com/<?=$page?>">
	 <img src="images/validation_button_css_rectangle_blue.gif" alt="Validate CSS" >
	</a>
	</figure>
	</footer>
	</body>
</html>