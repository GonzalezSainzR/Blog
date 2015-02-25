<?php
    require_once (__DIR__ . "/../model/config.php");
?>

<h1 id='Register'>Login</h1>

<form method='post' action='<?php echo $path . "controller/login-user.php"?>'>
    <div id='Register'>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div id='Register'>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div id='Register'>
        <button type="submit">Submit</button>
    </div>
</form>