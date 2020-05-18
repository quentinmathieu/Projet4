<?php 

$newcomment = new comment() ;
$newcomment->checkComment($_GET['deleteId'],$_GET['check']); 
header('Location: /projet_4/views/admin.php');
?>