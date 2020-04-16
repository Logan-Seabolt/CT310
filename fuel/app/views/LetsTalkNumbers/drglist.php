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
<div id="drgtable">
    <table id="drg_table" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
        <thead>
        <th id="done">DRG ID</th><th id="dtwo">DRG Description</th>
        </thead>
        <tbody>
        <?php
        foreach ($drg_description as $line) {
            $id = $line['DRG_ID'];
            $desc = $line['DRG_Description'];
            echo "<tr><td id='$id' class='DRGdesc'>$id</td><td>$desc</td></tr>";
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
        window.open("/~" + "<?php echo $author?>" +"/ct310/LTN/index.php/ltn/drgdetails?id="+$(this).attr("id"));
    });
</script>
</body>
</html>