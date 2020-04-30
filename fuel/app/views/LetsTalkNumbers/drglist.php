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
                $('#drg_table').tablesorter({
                    //widgets        : ['zebra', 'columns'],
                    //usNumberFormat : false,
                    //sortReset      : true,
                    //sortRestart    : true

                });
            });
        });
    </script>
</head>
    <br>
<body>
<div id="drgtable">
    <table id="drg_table" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
        <thead>
        <th id="done">DRG ID</th><th id="dtwo">DRG Description</th>
        </thead>
        <tbody>
        <?php
		$start = 20 * $_GET['page'];
		$end = min($start+20,count($drg_description));	
		for($i = $start; $i < $end; $i++){
            $id = $drg_description[$i]['DRG_ID'];
            $desc = $drg_description[$i]['DRG_Description'];
            echo "<tr><td id='$id' class='DRGdesc'>$id</td><td>$desc</td></tr>";
		}
        ?>
        </tbody>
    </table>
</div>
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
    $(".DRGdesc").click(function() {
        window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/drgdetails?id="+$(this).attr("id"));
    });
	$("#previous").click(function (){
		//var page = <?php echo($_GET['page']); ?>;
		if(<?php echo($_GET['page']); ?> == 0){			
		}
		else{
			window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/drglist?page="+<?php echo ($_GET['page']-1);?>, "_self");
		}
	});
	$("#next").click(function (){
		//var page = <?php echo($_GET['page']); ?>;
		if(<?php echo($_GET['page']); ?> >= <?php echo (ceil(count($drg_description)/20));?>){		
		}
		else{
			window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/drglist?page="+<?php echo ($_GET['page']+1);?>, "_self");
		}
	});	
</script>
</body>
</html>
