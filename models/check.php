<?php require_once('../models/comment.php');

$newcomment = new comment($newDB->_dbh) ;
$newcomment->checkComment($_GET['deleteId'],$_GET['check']); 
header('Location: /projet_4/views/admin.php');
?>