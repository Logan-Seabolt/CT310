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
        echo $hospitalsData[0]['providerName'];
        ?>
    </h2>
    <h4>
        <?php
        echo ("MPN: ".$hospitalsData[0]['providerID']." State: ".$hospitalsData[0]['state'])
        ?>
    </h4>
    <div id="drgdesctable">
        <table id="drg_desctable" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
            <thead>
            <th id="colOne">DRG ID</th><th id="colTwo">DRG Description</th><th id="colThree">Average Covered Charge</th><th id="colFour">Average Total Paid</th><th id="colFive">Average Medicare Paid</th>
            </thead>
            <tbody>
            <?php
            foreach ($CasesData as $line){
                $id = $line['DRG_ID'];
                $desc = $line['DRG_Description'];
                $covered = $line['avCovCharge'];
                $total = $line['avTotPay'];
                $medicare = $line['avMedPay'];
                echo "<tr><td id='$id' class='DRGdesc'>$id</td><td>$desc</td><td>$covered</td><td>$total</td><td>$medicare</td></tr>";
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
        $(".DRGdesc").click(function() {
            window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/drg_description?id="+$(this).attr("id"));
        });
    </script>
    </body>
</html>