<?php

  
  require_once('../index.php');
  require_once('../models/admin.php');



$log = new Admin($newDB->_dbh);
$log->login();
//$log->initAdmin("admin","capitol","admin@email.com");

require_once('../views/log.php');


?>