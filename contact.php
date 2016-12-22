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
	<!-- FORM VALIDATION -->
	<?php include "content/js/formvalidation.php";?>
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

<form  class="pure-form pure-form-aligned" method="post" action="database-write.php" name="myForm" onsubmit="return(validateEmail());">
	<fieldset>
		<div class="pure-control-group">
			<label for="name">NAME</label>
			<input type="text" name="name" id="name" required>
		</div>

		<div class="pure-control-group">
			<label for="email">EMAIL</label>
			<input type="text" name="email" id="email" required>
		</div>

		<div class="pure-control-group">
			<label for="phone">PHONE</label>
			<input type="tel" name="phone" id="phone" required>
		</div>

		<div class="pure-control-group">
			<label for="message">MESSAGE</label>
			<textarea name="message" id="message"></textarea>
		</div>

		<input class="pure-button pure-button-primary" type="submit" value="submit" id="button">
	</fieldset>
</form>

<?php include "footer.php";?>

</body>
</html>