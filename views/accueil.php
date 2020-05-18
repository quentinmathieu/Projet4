<?php


$newpost = new post() ;
$newpost->postList(); 
require_once('views/articles.php');

?>
<a href="index.php?route=newPost"><button type="button">Créer un nouveau post</button></a>
<a id="disconnect" href="index.php?route=disconnect"><button type="button">Se déconnecter</button></a>  


<?php
require_once('views/commentToCheck.php');

?>



