<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Asset::js("jquery.tablesorter.min.js"); 
	if(isset($_GET['page'])){
		if($_GET['page'] < 0){
			$_GET['page'] = 0;
		}
		if($_GET['page'] >= ceil(count($drg_description)/ 20)){
			$_GET['page'] = ceil(count($drg_description)/ 20)-1;
		}
	}
	else{
		$_GET['page'] = 0;
	}
	?>
    <script>
        $("document").ready(() => {
            $(function(){
                $('#hospital_List').tablesorter({
                    //widgets        : ['zebra', 'columns'],
                    //usNumberFormat : false,
                    //sortReset      : true,
                    //sortRestart    : true

                });
            });
        });
    </script>
</head>
<body>
<h2>
    <?php
    echo ($drg_description[0]['DRG_Description']);
    ?>
</h2>
<h4>
    <?php
    echo ("ID: ".$drg_description[0]['DRG_ID'])
    ?>
</h4>
<div id="hospitalList">
    <table id="hospital_List" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
        <thead>
        <th id="dColOne">Hospital Name</th><th id="dColTwo">MPN</th><th id="dColThree">State</th><th id="dColFour">Average Covered Charge</th><th id="dColFive">Average Total Paid</th><th id="dColSix">Average Medicare Paid</th>
        </thead>
        <tbody>
        <?php
		$start = 20 * $_GET['page'];
		$end = min($start+20,count($drg_description));	
		for($i = $start; $i < $end; $i++){
            $name = $drg_description[$i]['providerName'];
            $id = $drg_description[$i]['providerID'];
            $state = $drg_description[$i]['state'];
            $covered = $drg_description[$i]['avCovCharge'];
            $total = $drg_description[$i]['avTotPay'];
            $medicare = $drg_description[$i]['avMedPay'];
            echo ("<tr><td id='$id' class='HospitalName'>$name</td><td>$id</td><td>$state</td><td>\$$covered</td><td>\$$total</td><td>\$$medicare</td>");
		}
        ?>
        </tbody>
    </table>
<div id="previous">Previous</div>
<form method="GET">
    <span>Enter Page Number:</span><input type="text" name="page">
    <input type="submit" value="Search Page">
</form>
<div id="next">Next</div>
<script>
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
    ?>
    $(".HospitalName").click(function() {
        window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitaldetails?id="+$(this).attr("id"));
    });
	$("#previous").click(function (){
		//var page = <?php echo($_GET['page']); ?>;
		if(<?php echo($_GET['page']); ?> == 0){			
		}
		else{
			window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/drgdetails?page="+<?php echo ($_GET['page']-1);?>, "_self");
		}
	});
	$("#next").click(function (){
		//var page = <?php echo($_GET['page']); ?>;
		if(<?php echo($_GET['page']); ?> >= <?php echo (ceil(count($drg_description)/20));?>){		
		}
		else{
			window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/drgdetails?page="+<?php echo ($_GET['page']+1);?>, "_self");
		}
	});	
</script>
<h2>DRG Lookup</h2>
<form method="GET">
    <span>Enter DRG ID:</span><input type="text" name="id">
    <input type="submit" value="Search DRG" name="idsearch">
</form>
</body>
</html>
