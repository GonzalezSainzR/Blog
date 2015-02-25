<?php
require_once(__DIR__ . "/../model/config.php");
?>
<div class="col-xs-4" id='navbar'>
    <nav class="dr-menu">
    <div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Account</a></div>
    <ul>
        <li><a class="dr-icon dr-icon-user" href="#">Username</a></li>
        <li><a class="dr-icon dr-icon-menu" href="">Login</a></li>
        <li><a class="dr-icon dr-icon-heart" href="#">Register</a></li>
        <li><a class="dr-icon dr-icon-bullhorn" href="<?php echo $path . "post.php" ?>">Post</a></li>
        <li><a class="dr-icon dr-icon-switch" href="#">Logout</a></li>
    </ul>
</nav>
</div>