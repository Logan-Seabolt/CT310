<?php
echo Form::open(array(
    'action' => '/index.php/ltn/register',
    'method' => 'post',
    'class' => 'needs-validation',
    'novalidate' => 'true'
));
// Add security token
echo \Form::csrf();
?>
<div class='form-group'>
    <label for="username">Username</label>
    <input type='text' class='form-control' id='username' name='username'  required>
</div>
<div class="form-group">
    <label for="emailInput">Email address</label>
    <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" name='email'  required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="passwordInput">Password</label>
    <input type="password" class="form-control" id="passwordInput" name='password' required>
</div>
<div class="form-group">
    <label for="passwordConfirm">Repeat Password</label>
    <input type="password" class="form-control" id="passwordConfirm" name='passwordConfirm' required>
</div>
<div class="form-group">
    <label for="AdminCode">Admin Passcode</label>
    <input type="password" class="form-control" id="AdminCode" aria-describedby="Optional" name='adminCode'>
    <small id="Optional" class="form-text text-muted">*Optional</small>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php
echo Form::close();
?>
