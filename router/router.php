<?php 
var_dump(is_file('../controllers/backController.php'));
require_once('models/config.php');
require 'controllers/backController.php';

class router {
    public $_dbh;

    public function __construct($dbh)
  {
    $this->_dbh = $dbh;
  }

public function run()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'backOffice'){
                    
                    $backoffice = new backController($this->_dbh);
                    $backoffice->backOffice();
                    
                }
                else{
                    echo 'page inconnue';
                }
            }
            else{
                //require '../views/blog.php';
            }
        }
        catch (Exception $e)
        {
            echo 'Erreur';
        }
    }
}


$router = new router($newDB->_dbh);
$router->run();
?>