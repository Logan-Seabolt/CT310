<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Asset::js("jquery.tablesorter.min.js"); ?>
    <?php echo Asset::js('jquery.tablesorter.widgets.js');?>
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
        <th id="rowone">Provider ID</th><th id="rowtwo">Provider Name</th><th id="rowthree">Provider State</th>
        </thead>
        <tbody>
        <?php
        foreach ($hospitals as $line) {
            $id = $line['providerID'];
            $name = $line['providerName'];
            $state = $line['state'];
            echo "<tr><td>$id</td><td id='$id' class='Hname'>$name</td><td>$state</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>