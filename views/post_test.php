<?php require_once('../models/post.php');
$newpost = new post($newDB->_dbh) ;
$newpost->sendPost(); 
header('Location: /projet_4/views/admin.php');
?>