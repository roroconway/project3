<!DOCTYPE html>
<html>
<head>
	<title>RC PORTFOLIO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS framework "PURE" -->
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.0/build/pure-min.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.0/build/grids-min.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.0/build/grids-responsive-min.css">
	<!-- MY CSS -->
	<link rel="stylesheet" href="content/css/main.css">
	<!-- SLIDESHOW -->
	<link rel="stylesheet" href="ism/css/my-slider.css"/>
	<script src="ism/js/ism-2.2.min.js"></script>
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Raleway" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->

<?php include "navbar.php";?>

<!-- TITLE -->
<div class="pure-g contact">
	<div class="pure-u-1 pure-u-md-1 pure-u-lg-1">
    	<div class="l-box">
    		<h1>CONTACT</h1>
    	</div>
    </div>
</div>

<form method="post" action="database-write.php">
	<div>
		<label for="name"></label>
		<input type="text" placeholder="NAME" name="name" id="name">
	</div>

	<div>
		<label for="email"></label>
		<input type="text" placeholder="EMAIL" name="email" id="email">
	</div>

	<div>
		<label for="phone"></label>
		<input type="tel" placeholder="PHONE" name="phone" id="phone">
	</div>

	<div>
		<textarea placeholder="MESSAGE" name="message" id="message"></textarea>
	</div>

	<input type="submit" value="submit">
</form>

<?php include "footer.php";?>

</body>
</html>