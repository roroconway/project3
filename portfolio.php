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
	<link rel="stylesheet" href="ism2/css/my-slider.css"/>
	<script src="ism2/js/ism-2.2.min.js"></script>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Raleway" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<?php 
$current='portfolio';
include "navbar.php";?>

<div class="pure-g portfolio_title">
	<div class="pure-u-1 pure-u-md-1 pure-u-lg-1">
    	<div class="l-box">
    		<h1>PHOTOGRAPHY PORTFOLIO</h1>
    	</div>
    </div>
</div>

<!-- SECTIONS -->
<div class="pure-g port_section" id="bw_section">

    <div class="pure-u-0 pure-u-md-0 pure-u-lg-1-5">
    </div>

    <div class="pure-u-1 pure-u-md-1 pure-u-lg-3-5">
        <div class="ism-slider" data-play_type="loop" id="my-slider-portfolio">
          <ol>
            <li>
                <a href="https://ruairiconway.myportfolio.com/demons">
                    <img src="ism2/image/slides/_u/1482145533618_510663.png">
                </a>
            </li>
            <li>
                <a href="https://ruairiconway.myportfolio.com/sport">
                <img src="ism2/image/slides/_u/1482145533263_983119.png">
                </a>
            </li>
            <li>
                <a href="https://ruairiconway.myportfolio.com/b-w">
                <img src="ism2/image/slides/_u/1482145532418_642285.png">
                </a>
            </li>
            <li>
                <a href="https://ruairiconway.myportfolio.com/life">
                <img src="ism2/image/slides/_u/1482145532189_642522.png">
                </a>
            </li>
          </ol>
        </div>
    </div>

    <div class="pure-u-0 pure-u-md-0 pure-u-lg-1-5">
    </div>

</div>

<!-- FOOTER -->
<?php include "footer.php";?>

</body>
</html>