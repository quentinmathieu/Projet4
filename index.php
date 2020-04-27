<?php
 
require_once('models/config.php');
require_once('router/router.php');








$router = new router($newDB->_dbh);
$router->run();
?>