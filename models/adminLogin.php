<?php

class login extends createPDO
{


  public $_username ;
  public $_password ;
  public $_dbh;
  public $_sql;
  public $_stmt;
  public $_result;
  public $_isValid;

  public function __construct($dbh)
  {
    $this->_dbh = $dbh;
  }

  public function login()
  {


    session_start();
    
    if (isset($_POST["username"]) && isset($_POST["password"])) {
      $this->_username = $_POST["username"];
    $this->_password = $_POST["password"];
      $this->_sql = "SELECT password, id FROM adminuser WHERE username = :username";
      $this->_stmt = $this->_dbh->prepare($this->_sql);
      $this->_stmt->bindValue(':username', $this->_username);
      $this->_stmt->execute();
      $this->_result = $this->_stmt->fetch();
      $this->_isValid = password_verify($this->_password, $this->_result[0]);

      if ($this->_isValid) {
        $_SESSION['isAdmin'] = true;
        $_SESSION['authUser'] = $this->_username;
        $_SESSION['id'] = $this->_result[1];
        header('Location: /projet_4/views/admin.php');
      }
      else  {
        $_SESSION['isAdmin'] = false;
        $_SESSION['authUser'] = NULL;
        $_SESSION['id'] = NULL;
        header('Location: /projet_4/views/admin.php');
      }
    }
  }

}



?>