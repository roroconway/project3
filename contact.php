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

<form class="pure-form">
    <fieldset class="pure-group">
        <input type="text" class="pure-input-1-3" placeholder="FULL NAME" id="name">
        <input type="email" class="pure-input-1-3" placeholder="EMAIL" id="email">
        <input type="number" class="pure-input-1-3" placeholder="PHONE NUMBER" id="phone">
    </fieldset>
    
    <fieldset class="pure-group">
        <textarea class="pure-input-1-3" placeholder="MESSAGE" id="message"></textarea>
    </fieldset>
    
    <button type="submit" class="pure-button pure-input-1-3 pure-button-primary">SUBMIT</button>
</form>

<?php include "footer.php";?>

</body>
</html>