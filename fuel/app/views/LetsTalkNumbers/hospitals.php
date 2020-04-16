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
<body>
<div id="hospitalTable">
    <table id="hospital_table" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
        <thead>
        <th id="rowtwo">Provider Name</th><th id="rowthree">Provider State</th><th id="rowone">Provider ID</th>
        </thead>
        <tbody>
        <?php
        foreach ($hospitals as $line) {
            $id = $line['providerID'];
            $name = $line['providerName'];
            $state = $line['state'];
            echo "<tr><td id='$id' class='Hname'>$name</td><td>$state</td><td>$id</td></tr>";
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
    $(".Hname").click(function() {
        window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/hospitalDetails?id="+$(this).attr("id"));
    });
</script>
</body>
</html>