<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Asset::js("jquery.tablesorter.min.js"); ?>
    <?php echo Asset::js('jquery.tablesorter.widgets.js');?>
    <?php echo Asset::js('jquery.tablesorter.widgets-filter-formatter.js');?>
</head>
<body>
<div id="hospitalTable">
    <table id="hospital_table" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
        <thead>
        <th id="rowone">Provider ID</th><th id="rowtwo">Provider Name</th><th id="rowthree">Provider State</th>
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