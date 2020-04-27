<?php
  require_once('models/admin.php');
  require_once('models/config.php');


class backController{

  public $_dbh;

  public function __construct($dbh)
  {
    $this->_dbh = $dbh;
  }

  public function backOffice(){
    $log = new Admin($this->_dbh);
    $log->login();
    //$log->initAdmin("admin","capitol","admin@email.com");
    
    require_once('views/log.php');
  }
}
?>