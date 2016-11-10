<?php
// process the login information and check with database

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</body>
</html>
