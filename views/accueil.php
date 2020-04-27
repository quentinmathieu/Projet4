<?php


$newpost = new post($newDB->_dbh) ;
$newpost->postList(); 
require_once('../views/articles.php');
require_once('../models/post.php');

//ajax post
//ou par url avec get
?>
<a href="../views/newPost.php"><button type="button">Créer un nouveau post</button></a>
<a id="disconnect" href="../models/disconnect.php"><button type="button">Se déconnecter</button></a>  


<?php
require_once('../views/commentToCheck.php');

?>



