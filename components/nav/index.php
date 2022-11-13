<?php
function CheckLink($path)
{
    # code...
    $uri=$_SERVER['REQUEST_URI'];
    if(strpos($uri,'?')) $uri=substr($uri,0,strpos($uri,'?'));
    if($uri===$path){
        echo 'class="active-link"';
    }
}
?>
<nav>
    <ul>
        <li><a <?php CheckLink("/") ?>  href="/" >home</a></li>
        <li><a <?php CheckLink("/user") ?> href="/user">user</a></li>
        <li><a <?php CheckLink("/about") ?> href="/about">about</a></li>
        <li><a <?php CheckLink("/contact") ?> href="/contact">contact</a></li>
    </ul>
</nav>