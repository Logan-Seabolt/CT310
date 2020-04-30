<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo Asset::js("jquery.tablesorter.min.js");
        if(isset($_GET['page'])){
            if($_GET['page'] < 0){
                $_GET['page'] = 0;
            }
            if($_GET['page'] >= ceil(count($CasesData)/ 20)){
                $_GET['page'] = ceil(count($CasesData)/ 20)-1;
            }
        }
        else{
            $_GET['page'] = 0;
        }
        ?>
        <script>
            $("document").ready(() => {
                $(function(){
                    $('#drg_desctable').tablesorter({
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
        echo ("MPN: ".$hospitalsData[0]['providerID']." State: ".$hospitalsData[0]['state']."<br>");
        echo ("Address: ".$hospitalsData[0]['address'].", ".$hospitalsData[0]['city'].", ".$hospitalsData[0]['state']." ".$hospitalsData[0]['zipcode']);
        ?>
    </h4>
    <div id="drgdesctable">
        <table id="drg_desctable" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
            <thead>
            <th id="colOne">DRG ID</th><th id="colTwo">DRG Description</th><th id="colThree">Average Covered Charge</th><th id="colFour">Average Total Paid</th><th id="colFive">Average Medicare Paid</th>
            </thead>
            <tbody>
            <?php
            $start = 20 * $_GET['page'];
            $end = min($start+20,count($CasesData));
            for($i = $start; $i < $end; $i++){
                $id = $CasesData[$i]['DRG_ID'];
                $desc = $CasesData[$i]['DRG_Description'];
                $covered = $CasesData[$i]['avCovCharge'];
                $total = $CasesData[$i]['avTotPay'];
                $medicare = $CasesData[$i]['avMedPay'];
                echo "<tr><td id='$id' class='DRGdesc'>$id</td><td>$desc</td><td>\$$covered</td><td>\$$total</td><td>\$$medicare</td></tr>";
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
                window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitaldetails?page="+<?php echo ($_GET['page']-1);?>, "_self");
            }
        });
        $("#next").click(function (){
            //var page = <?php echo($_GET['page']); ?>;
            if(<?php echo($_GET['page']); ?> >= <?php echo (ceil(count($CasesData)/20));?>){
            }
        else{
                window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitaldetails?page="+<?php echo ($_GET['page']+1);?>, "_self");
            }
        });
    </script>
    <h2>Hospital Lookup</h2>
    <form method="GET">
        <span>Enter Hospital ID:</span><input type="text" name="id">
        <input type="submit" value="Search Hospital">
    </form>
    <!---Comment Section code--->
    <h2>Comments</h2>
    <?php
    if(isset($_SESSION['username'])){
        echo ("<form method=\"POST\">");
        echo ("<span>Leave a comment about this Hospital!</span><input type=\"text\" name=\"commentText\" id=\"commentBox\">");
        echo ("<input type=\"submit\" value=\"Leave a Comment\" name=\"commentSub\"></form>");
    }else{
        echo ("<h3>Please Log in To Comment</h3>");
    }
    ?>
    <!--comments--->
    </body>
</html>