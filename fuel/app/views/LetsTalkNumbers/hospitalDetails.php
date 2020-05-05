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
    <div id="previous">&laquo; Previous</div>
    <form method="GET" id="searchPage">
        <span>Enter Page Number:</span><input type="text" name="page">
        <input type="text" value="<?php if(isset($_GET['id']))echo $_GET['id']; else echo '010001';?>" name="id" style="display: none">
        <input type="submit" value="Search Page">
    </form>
    <div id="next">Next &raquo;</div>
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
        echo ("<h3>Please <a href=\"./login\">Log in</a> To Comment</h3>");
    }
    ?>
    <!--comments--->
    <?php
    use \DB;
    //Get user's admin level
    if(isset($_SESSION['username'])){
        $AdminLevel = DB::query("SELECT group_id FROM users WHERE username='".$_SESSION['username']."'", DB::SELECT)->execute()->as_array()[0]['group_id'];
    }
    foreach ($commentsArr as $comment){
        $commentID = $comment['id'];
        echo ("<table class='commentBlock' id='$commentID'> <thead>");
        if($comment['deleted'] == 1){
            $Username = '[deleted]';
        }
        else{
            $Username = $comment['username'];
        }
        echo ("<th>".$Username."</th>");
        echo ("<th>Date created: ".$comment['dateCreated']."<br>Last edit: ".$comment['lastEdit']."</th>");        
        echo ("<th>".Asset::img('upvoteArrow.png', array('width'=>"50", 'height'=>"50",'class'=>'UpVote clickable'))."</th>");
		echo ("<th>".($comment['upvotes'] - $comment['downvotes'])."</th>");
        echo ("<th>".Asset::img('downvoteArrow.png', array('width'=>"50", 'height'=>"50",'class'=>'DownVote clickable'))."</th>");
        echo("<th>");
        if(isset($_SESSION['username'])){
            if(($_SESSION['username'] == $comment['username'] || $AdminLevel == 2) && $comment['deleted'] == 0){
                echo ("<div class='dropdownMenu'>");
                echo ("<button class='dropdownbtn clickable'>Options</button>");
                echo ("<div class=\"dropdown-content\">");
                echo ("<span class='edit clickable'>Edit</span>");
                echo ("<span class='delete clickable'>Delete</span>");
                echo ("</div></div>");
            }
        }
        echo ("</th></thead>");
        if($comment['deleted'] == 1){
            $text = '[deleted]';
        }
        else{
            $text = $comment['text'];
        }
        echo ("<tr class='mainText'><td colspan=\"6\" rowspan=\"3\">".$text."</td></tr>");
        echo ("<tr></tr><tr></tr>");
        if(isset($_SESSION['username'])){
            echo ("<tr><td colspan=\"6\" class='clickable reply'>Click here to reply to this comment</td></tr>");
        }
        else{
            echo ("<tr><td colspan=\"6\">Log in to reply to comments</td></tr>");
        }
        $HospitalID = $comment['providerID'];
        $replies = DB::query("SELECT * FROM comments WHERE providerID='$HospitalID' AND replyTo='$commentID'", DB::SELECT)->execute()->as_array();
        if(count($replies) == 0){
            echo("<tr><td colspan=\"6\">There are no replies to this comment</td></tr>");
        }
        else{
            foreach ($replies as $reply){
                echo("<tr><td colspan=\"6\"><table class='replyBlock' id='".$reply['id']."'><thead>");
                if($reply['deleted'] == 1){
                    $Username = '[deleted]';
                }
                else{
                    $Username = $reply['username'];
                }
                echo ("<th>".$Username."</th>");

                echo ("<th>Date created: ".$reply['dateCreated']."<br>Last edit: ".$reply['lastEdit']."</th>");          
                echo ("<th>".Asset::img('upvoteArrow.png', array('width'=>"50", 'height'=>"50",'class'=>'UpVote clickable'))."</th>");
				echo ("<th>".($reply['upvotes'] - $reply['downvotes'])."</th>");
                echo ("<th>".Asset::img('downvoteArrow.png', array('width'=>"50", 'height'=>"50",'class'=>'DownVote clickable'))."</th>");
                echo("<th>");
                if(isset($_SESSION['username'])){
                    if(($_SESSION['username'] == $reply['username'] || $AdminLevel == 2) && $reply['deleted'] == 0){
                        echo ("<div class='dropdownMenu'>");
                        echo ("<button class='dropdownbtn clickable'>Options</button>");
                        echo ("<div class=\"dropdown-content\">");
                        echo ("<span class='edit clickable'>Edit</span>");
                        echo ("<span class='delete clickable'>Delete</span>");
                        echo ("</div></div>");
                    }
                }
                echo ("</th></thead>");
                if($reply['deleted'] == 1){
                    $text = '[deleted]';
                }
                else{
                    $text = $reply['text'];
                }
                echo ("<tr class='mainText'><td colspan=\"6\" rowspan=\"3\">".$text."</td></tr>");
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
            var $tableVar = $(this).parent().parent().parent().parent().parent().parent();
            var $commentArea = $tableVar.children("tbody").children(".mainText").children("td");
            var $oldText = $commentArea.text();
            $commentArea.html("<form method='post'>" +
                "<input type='text' name='editText' value='"+$oldText+"'>" +
                "<input type='number' style='display: none' name='editID' value='"+$tableVar.attr('id')+"'>" +
                "<input type='submit' name='editSub'>");
        });
        $(".delete").click(function () {
            var $tableVar = $(this).parent().parent().parent().parent().parent().parent().attr('id');
            var $tableType = $(this).parent().parent().parent().parent().parent().parent().attr('class');
            $(document.body).append("<form method='post' id='deleteSubmit'>" +
                "<input type='text' style='display: none' name='deleteSub' value='yes'>" +
                "<input type='text' style='display: none' name='deleteType' value='"+$tableType+"'>" +
                "<input type='number' style='display: none' name='deleteID' value='"+$tableVar+"'>" +
                "</form>");
            if(window.confirm("Are you sure you want to delete this comment?")){
                $("#deleteSubmit").submit();
            }
            else{
                $("#deleteSubmit").html("");
                $("#deleteSubmit").removeAttr('id');
            }
        });
        $(".UpVote").click(function () {
            var $tableVar = $(this).parent().parent().parent().parent().attr('id');
            console.log($tableVar);
            $(document.body).append("<form method='post' id='upvoteSubmit'>" +
                "<input type='text' style='display: none' name='upvoteSub' value='yes'>" +
                "<input type='number' style='display: none' name='upvoteID' value='"+$tableVar+"'>" +
                "</form>");
            $("#upvoteSubmit").submit();
        })
        $(".DownVote").click(function () {
            var $tableVar = $(this).parent().parent().parent().parent().attr('id');
            $(document.body).append("<form method='post' id='downvoteSubmit'>" +
                "<input type='text' style='display: none' name='downvoteSub' value='yes'>" +
                "<input type='number' style='display: none' name='downvoteID' value='"+$tableVar+"'>" +
                "</form>");
            $("#downvoteSubmit").submit();
        })
    </script>
    </body>
</html>