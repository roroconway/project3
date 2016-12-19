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

<form  class="pure-form pure-form-aligned" method="post" action="database-write.php">
	<fieldset>
		<div class="pure-control-group">
			<label for="name">Name</label>
			<input type="text" placeholder="NAME" name="name" id="name">
		</div>

		<div class="pure-control-group">
			<label for="email">Email</label>
			<input type="text" placeholder="EMAIL" name="email" id="email">
		</div>

		<div class="pure-control-group">
			<label for="phone">Phone</label>
			<input type="tel" placeholder="PHONE" name="phone" id="phone">
		</div>

		<div class="pure-control-group">
			<label for="message">Message</label>
			<textarea placeholder="MESSAGE" name="message" id="message"></textarea>
		</div>

		<input class="pure-button pure-button-primary" type="submit" value="submit" id="button">
	</fieldset>
</form>

<?php include "footer.php";?>

</body>
</html>