<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Asset::js("jquery.tablesorter.min.js"); ?>
    <?php echo Asset::js('jquery.tablesorter.widgets.min.js');?>
    <?php echo Asset::js('jquery.tablesorter.widgets-filter-formatter.min.js');?>
</head>
<body>
<div id="hospitalTable">
    <table id="hospital_table" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
        <thead>
        <th id="rowone">Provider ID</th><th id="rowtwo">Provider Name</th><th id="rowthree">Provider State</th>
        </thead>
        <tbody>
        <?php
        foreach ($hospitals as $line) {
            $id = $line['providerID'];
            $name = $line['providerName'];
            $state = $line['state'];
            echo "<tr><td>$id</td><td>$name</td><td>$state</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>