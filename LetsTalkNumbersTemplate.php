<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Tessa DeMuth, Logan Seabolt, Nicole Standiford">
		<meta name="description" content="Home Page">
		<meta name="keywords" content="Let's Talk Numbers">
		<?php echo Asset::js('jquery-3.3.1.min.js');?>
		<?php echo Asset::js('jq-L.js');?>
		<?php echo Asset::css('styleLTN.css');?>
		<title> <?php echo $title; ?> </title>
	</head>
	<body>
		<div class="header">
			<img src="./IMG-0379.JPG" alt="Lets Talk Numbers Logo"
		</div>
		<div class="navbar">
			<a href="./index">Home</a>
		</div>
		<?php echo $content; ?>
		<footer>
			 <p> Colorado State University, Computer Science Department </p>
		</footer>
	</body>
</html>