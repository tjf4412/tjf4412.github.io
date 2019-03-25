<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body onload="makeActive('<?php echo $activepage ?>', '<?php echo $activeparent ?>')">
	<div class="wrapper">
		<div class="box header">
            <a href="index.html"><img src="assets/images/logo.png" alt="GFA Logo"></a>
            <h1>Gatt's Firearm Academy</h1>
        </div>
		<button onclick="location.href='index.html'" class="button home">HOME</button>
		<button onclick="location.href='courses.html'" class="button courses">COURSES</button>
		<div class="dropdown">
			<button class="button about">ABOUT</button>
			<div class="dropdown-content">
				<a href="aboutpersonal.html" class="notcurrent">PERSONAL</a>
				<a href="aboutgfa.html" class="notcurrent">GFA</a>
			</div>
		</div>
		<button onclick="location.href='products.html'" class="button products">PRODUCTS</button>
		<div class="dropdown">
			<button class="button endorsements">ENDORSEMENTS</button>
			<div class="dropdown-content">
				<a href="endorsements.html" class="notcurrent">COMPANIES</a>
				<a href="references.html" class="notcurrent">REFERENCES</a>
			</div>
		</div>
		<button onclick="location.href='legal.html'" class="button legal">LEGAL</button>
