<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Tessa DeMuth, Logan Seabolt, Nicole Standiford">
		<meta name="description" content="Home Page">
		<meta name="keywords" content="Let's Talk Numbers">
		<?php echo Asset::js('jquery-3.3.1.min.js');?>
		<?php echo Asset::js('jquery.tablesorter.min.js');?>
		<?php echo Asset::js('jquery.tablesorter.widgets.min.js');?>
		<?php echo Asset::js('jquery.tablesorter.widgets-filter-formatter.min.js');?>
		<?php echo Asset::css('LetsTalkNumbers.css');?>
		<title> <?php echo $title; ?> </title>
	</head>
	<body>
		<div class="header">
			<?php echo Asset::img('logo.jpg'); ?>
		</div>
		<div class="navbar">
			<a href="/~nlstan/ct310/fuelviews/index.php/ltn/index">Home</a>
			<a href="/~nlstan/ct310/fuelviews/index.php/ltn/about">About</a>
			<a href="/~nlstan/ct310/fuelviews/index.php/ltn/hospitallist">Hospital List</a>
			<a href="/~nlstan/ct310/fuelviews/index.php/ltn/drglist">DRG List</a>
			<a href="/~nlstan/ct310/fuelviews/index.php/ltn/hospitaldetails">Hospital Details</a>
			<a href="/~nlstan/ct310/fuelviews/index.php/ltn/drgdetails">DRG Details</a>
		</div>
		<?php echo $content; ?>
		<div class="footer">
			  Colorado State University, Computer Science Department 
		</div>
	</body>
</html>