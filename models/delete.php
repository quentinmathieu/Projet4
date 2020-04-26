<?php require_once('../models/post.php');

$newpost = new post($newDB->_dbh) ;
$newpost->deletePost($_GET['deleteId']); 
header('Location: /projet_4/views/admin.php');
?>