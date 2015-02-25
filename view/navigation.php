<?php
require_once(__DIR__ . "/../model/config.php");
?>
<div class='row'>
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
    <div  id='Info' class='col-xs-8'>
        <h2>Welcome to my Blog</h2><br/>
        <h4>Hi. If you havnt noticed already, this is the first blog iv'e ever made.</h4>
        <h3>A Little about the creator</h3>
        <h4>My name is Renan Gonzalez-Sainz.<br/> Im a 14 year old student attending Pasadena High School and am currently in a 4 year program called The APP Academy.<br/> Web design is one of my favorite things to do, and is also something I think im fairly good at.<br/> Anyways, enough about me, on to the blog!<br/><br/><br/></h4>
    </div>
</div>
<div class='row'>
    <H1 id='All'>All Posts</H1>
</div>