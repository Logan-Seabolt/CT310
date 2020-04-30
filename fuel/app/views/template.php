<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Tessa DeMuth, Logan Seabolt, Nicole Standiford">
		<meta name="description" content="Home Page">
		<meta name="keywords" content="Let's Talk Numbers">
		<?php echo Asset::js('jquery-3.3.1.min.js');?>
		<?php echo Asset::js('jquery.tablesorter.min.js');?>
		<?php echo Asset::css('LetsTalkNumbers.css');?>
		<title> <?php echo $title; ?> </title>
	</head>
	<body>
		<div class="header">
			<?php echo Asset::img('logoupdated.jpg'); ?>
		</div>
		<div class="navbar">
    <?php
        $temp = $GLOBALS["_SERVER"];
        $temp = implode($temp);
        $line = explode("/", $temp);
        if(in_array("seaboltl",$line))
            $author = "seaboltl";
        elseif (in_array("demuthtc",$line))
            $author = "demuthtc";
        else
            $author = "nlstan";
        echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/index">Home</a>';
        echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/about">About</a>';
        echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/hospitals">Hospital List</a>';
        echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/drglist">DRG List</a>';
        echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/hospitaldetails">Hospital Details</a>';
        echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/drgdetails">DRG Details</a>';
        //Add a Login Button here? if not set login add login button, else print logout?
        if(isset($_SESSION['username'])){
            echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/logout">Log Out</a>';
        }
        else{
            echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/login">Log In</a>';
        }
      ?>
		</div>
		<?php echo $content; ?>
		<div class="footer">
			  Colorado State University, Computer Science Department 
		</div>
	</body>
</html>