<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Asset::js("jquery.tablesorter.min.js"); ?>
    <?php echo Asset::js('jquery.tablesorter.widgets.js');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <th id="rowone">DRG ID</th><th id="rowtwo">DRG Description</th>
        </thead>
        <tbody>
        <?php
        foreach ($drg_description as $line) {
            $id = $line['DRG_ID'];
            $desc = $line['DRG_Description'];
            echo "<tr><td id='$id' class='DRGID'>$id</td><td>$desc</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>