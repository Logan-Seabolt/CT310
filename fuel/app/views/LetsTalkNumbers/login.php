<?php
echo Form::open(array(
    'action' => '/index.php/ltn/login',
    'method' => 'post',
    'class' => 'needs-validation',
    'novalidate' => 'true'
));
// Add security token
echo \Form::csrf();
?>
<!-- Using bootstrap forms to make it pretty -->
<div class='form-group'>
    <label for="username">Username</label>
    <input type='text' class='form-control' id='username' name='username'  required>
</div>
<div class="form-group">
    <label for="passwordInput">Password</label>
    <input type="password" class="form-control" id="passwordInput" name='password' required>
</div>
<button type="submit" class="btn btn-primary">Login</button>
<?php
echo Form::close();
?>
<h2>Not Registered?</h2>
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
    echo '<a href="/~'.$author.'/ct310/LTN/index.php/ltn/register">Click here to Register an account</a>';
?>
