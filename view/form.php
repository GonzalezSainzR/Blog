<?php
    require_once (__DIR__ . "/../model/config.php");
?>

<h1 id='PST'>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "/controller/create-post.php"; ?>">
    <div  id='PST'>
        <label for="title">Title: </label>
        <input type="text" name="title"></input>
    </div>
            
    <div id='PST'>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    
    <div id='PST'>
        <button type="submit">Submit</button>
    </div>
</form>

