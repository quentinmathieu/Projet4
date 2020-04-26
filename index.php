<?php

require_once('models/config.php');
if ( ! isset($newDB->_dbh)) 
    { 
$newDB = new model;
$newDB->initDb();
}




?>