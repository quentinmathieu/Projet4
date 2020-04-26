<?php

  
  require_once('../models/admin.php');



$log = new Admin($newDB->_dbh);
$log->logout();



?>