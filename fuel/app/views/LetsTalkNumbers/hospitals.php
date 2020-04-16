<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Asset::js("jquery.tablesorter.min.js"); ?>
    <?php echo Asset::js('jquery.tablesorter.widgets.js');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <th id="rowone">Provider Name</th><th id="rowtwo">Provider State</th><th id="rowthree">Provider ID</th>
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
</body>
</html>