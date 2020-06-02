<?php


$newpost = new post() ;
$newpost->postList(); 
require_once('views/header.php');

require_once('views/articles.php');


?>
<a href="index.php?route=newPost"><button type="button" id="btn-newPost" class="btn  btn-brown ">Créer un nouveau post</button></a>
  


<?php
require_once('views/commentToCheck.php');
require_once('views/scripts.php');
require_once('views/footer.php');
?>



