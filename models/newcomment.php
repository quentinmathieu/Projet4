<?php require_once('../models/comment.php');
$newcomment = new comment($newDB->_dbh) ;
$newcomment->sendComment($_GET['idPost']); 
header('Location: /projet_4/views/viewPost.php?idPost='.$_GET['idPost']);
?>