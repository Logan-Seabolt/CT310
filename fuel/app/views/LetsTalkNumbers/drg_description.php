<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Asset::js("jquery.tablesorter.min.js"); ?>
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
<body>
<h2>
    <?php
    echo ("DRG Lookup");
    ?>
</h2>
<h4>
    <?php
    echo ("ID: ".$drg_description[0]['DRG_ID']." Description: ".$drg_description[0]['DRG_Description'])
    ?>
</h4>
<div id="hospitalList">
    <table id="hospital_List" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
        <thead>
        <th id="dColOne">Hospital Name</th><th id="dColTwo">MPN</th><th id="dColThree">State</th><th id="dColFour">Average Covered Charge</th><th id="dColFive">Average Total Paid</th><th id="dColSix">Average Medicare Paid</th>
        </thead>
        <tbody>
        <?php
        foreach ($drg_description as $line){
            $name = $line['providerName'];
            $id = $line['providerID'];
            $state = $line['state'];
            $covered = $line['avCovCharge'];
            $total = $line['avTotPay'];
            $medicare = $line['avMedPay'];
            echo ("<tr><td id='$id' class='HospitalName'>$name</td><td>$id</td><td>$state</td><td>\$$covered</td><td>\$$total</td><td>\$$medicare</td>");
        }
        ?>
        </tbody>
    </table>
</div>
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
</script>
<h2>DRG Search</h2>
<form method="GET">
    <span>Enter DRG ID:</span><input type="text" name="id">
    <input type="submit" value="Search DRG" name="idsearch">
</form>
</body>
</html>
