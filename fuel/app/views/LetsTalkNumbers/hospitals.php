<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Asset::js("jquery.tablesorter.min.js"); ?>
    <script>
        $("document").ready(() => {
            $(function(){
                $('#hospital_table').tablesorter({
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
<div id="hospitalTable">
    <table id="hospital_table" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
        <thead>
        <th id="rowtwo">Provider Name</th><th id="rowthree">Provider State</th><th id="rowone">Provider ID</th>
        </thead>
        <tbody>
        <?php
        $start = 20 * $_GET['page'];
        $end = min($start+20,count($hospitals));
        for($i = $start; $i < $end; $i++){
            $id = $hospitals[$i]['providerID'];
            $name = $hospitals[$i]['providerName'];
            $state = $hospitals[$i]['state'];
            echo "<tr><td id='$id' class='Hname'>$name</td><td>$state</td><td>$id</td></tr>";
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
    $(".Hname").click(function() {
        window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitalDetails?id="+$(this).attr("id"));
    });
    $("#previous").click(function (){
        //var page = <?php echo($_GET['page']); ?>;
        if(<?php echo($_GET['page']); ?> == 0){
        }
    else{
            window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitals?page="+<?php echo ($_GET['page']-1);?>, "_self");
        }
    });
    $("#next").click(function (){
        //var page = <?php echo($_GET['page']); ?>;
        if(<?php echo($_GET['page']); ?> >= <?php echo (ceil(count($hospitals)/20));?>){
        }
    else{
            window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitals?page="+<?php echo ($_GET['page']+1);?>, "_self");
        }
    });
</script>
</body>
</html>
