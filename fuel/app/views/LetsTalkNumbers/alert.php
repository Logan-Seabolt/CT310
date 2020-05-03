<?php
if($alertType == 'failed'){
    echo ('<div class="alert alert-danger" style="width: 100%">');
    echo $message;
    echo('</div>');
}
elseif ($alertType == 'success'){
    echo ('<div class="alert alert-success" style="width: 100%">');
    echo $message;
    echo('</div>');
}
else{

}
?>