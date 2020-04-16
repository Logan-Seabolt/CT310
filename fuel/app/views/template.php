<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Tessa DeMuth, Logan Seabolt, Nicole Standiford">
		<meta name="description" content="Home Page">
		<meta name="keywords" content="Let's Talk Numbers">
		<?php echo Asset::js('jquery-3.3.1.min.js');?>
		<?php echo Asset::css('LetsTalkNumbers.css');?>
		<title> <?php echo $title; ?> </title>
	</head>
	<body>
		<div class="header">
			<?php echo Asset::img('logo.jpg'); ?>
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
                echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/hospitals">Data Analysis</a>';
                echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/drglist">DRG List</a>';
            ?>
		</div>
		<?php echo $content; ?>
		<div class="footer">
			  Colorado State University, Computer Science Department 
		</div>
	</body>
</html>