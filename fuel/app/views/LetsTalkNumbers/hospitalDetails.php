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
        if(!isset($_GET['id'])){
            $_GET['id'] = '010001';
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
        <style>
            /* Dropdown Button */
            .dropdownbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdownMenu {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 80px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content span {
                color: black;
                padding: 10px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content span:hover {background-color: #ddd;}
        </style>
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
        <input type="text" value="<?php if(isset($_GET['id']))echo $_GET['id']; else echo '010001';?>" name="id" style="display: none">
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
                window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitaldetails?page=<?php echo ($_GET['page']-1);?>&id=<?php if(isset($_GET['id']))echo $_GET['id']; else echo '010001';?>", "_self");
            }
        });
        $("#next").click(function (){
            //var page = <?php echo($_GET['page']); ?>;
            if(<?php echo($_GET['page']); ?> >= <?php echo (ceil(count($CasesData)/20));?>){
            }
        else{
                window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitaldetails?page=<?php echo ($_GET['page']+1);?>&id=<?php if(isset($_GET['id']))echo $_GET['id']; else echo '010001';?>", "_self");
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
    <?php
    use \DB;
    foreach ($commentsArr as $comment){
        $commentID = $comment['id'];
        echo ("<table class='comment' id='$commentID'> <thead>");
        echo ("<th>".$comment['username']."</th>");
        echo ("<th>Date created: ".$comment['dateCreated']."<br>Last edit: ".$comment['lastEdit']."</th>");
        echo ("<th>".($comment['upvotes'] - $comment['downvotes'])."</th>");
        echo ("<th>".Asset::img('upvoteArrow.png', array('width'=>"20", 'height'=>"20"))."</th>");
        echo ("<th>".Asset::img('downvoteArrow.png', array('width'=>"20", 'height'=>"20"))."</th>");
        echo("<th>");
        if(isset($_SESSION['username'])){
            if($_SESSION['username'] == $comment['username']){
                echo ("<div class='dropdownMenu'>");
                echo ("<button class='dropdownbtn'>Options</button>");
                echo ("<div class=\"dropdown-content\">");
                echo ("<span class='edit'>Edit</span>");
                echo ("<span class='delete'>Delete</span>");
                echo ("</div></div>");
            }
        }
        echo ("</th></thead>");
        echo ("<tr class='mainText'><td colspan=\"6\" rowspan=\"3\">".$comment['text']."</td></tr>");
        echo ("<tr></tr><tr></tr>");
        if(isset($_SESSION['username'])){
            echo ("<tr><td colspan=\"6\" class='clickable reply'>Reply to this comment</td></tr>");
        }
        $HospitalID = $comment['providerID'];
        $replies = DB::query("SELECT * FROM comments WHERE providerID='$HospitalID' AND replyTo='$commentID'", DB::SELECT)->execute()->as_array();
        if(count($replies) == 0){
            echo("<tr><td colspan=\"6\">There are no replies to this comment</td></tr>");
        }
        else{
            foreach ($replies as $reply){
                echo("<tr><td colspan=\"6\"><table class='replyBlock'><thead>");
                echo ("<th>".$reply['username']."</th>");
                echo ("<th>Date created: ".$reply['dateCreated']."<br>Last edit: ".$reply['lastEdit']."</th>");
                echo ("<th>".($reply['upvotes'] - $reply['downvotes'])."</th>");
                echo ("<th>".Asset::img('upvoteArrow.png', array('width'=>"20", 'height'=>"20"))."</th>");
                echo ("<th>".Asset::img('downvoteArrow.png', array('width'=>"20", 'height'=>"20"))."</th>");
                echo ("<th>Drop Down Menu</th></thead>");
                echo ("<tr><td colspan=\"6\" rowspan=\"3\">".$reply['text']."</td></tr>");
                echo ("<tr></tr><tr></tr>");
                echo ("</table>");
            }
        }
        echo("</table>");
    }
    ?>
    <script>
        $(".reply").one("click", function () {
            $(this).html("<form method='post'>" +
                "<span>Leave your reply</span><input type='text' name='replyText'>" +
                "<input type='number' style='display: none' name='replyID' value='"+$(this).parent().parent().parent().attr('id')+"'>" +
                "<input type='submit' name='replySub'>");
            $(this).removeClass("reply");
        });
        $(".dropdownbtn").click(function () {
            $(this).parent().children("div").toggle();
        });
        $(".edit").click(function () {
            $tableVar = $(this).parent().parent().parent().parent().parent().parent();
            $commentArea = $tableVar.children("tbody").children(".mainText").children("td");
            $oldText = $commentArea.text();
            console.log($commentArea);
            $commentArea.html("<form method='post'>" +
                "<input type='text' name='editText' value='"+$oldText+"'>" +
                "<input type='number' style='display: none' name='editID' value='"+$tableVar.attr('id')+"'>" +
                "<input type='submit' name='editSub'>");
        });
    </script>
    </body>
</html>