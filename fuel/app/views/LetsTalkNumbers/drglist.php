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
            echo "<tr><td>$id</td><td id='$id' class='DRGdesc'>$desc</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>