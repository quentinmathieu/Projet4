<?php

  require_once('../views/log.php');
  require_once('../index.php');
  require_once('../models/adminLogin.php');
  


$log = new login($newDB->_dbh);
$log->login();

?>