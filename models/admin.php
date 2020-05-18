<?php

class Admin
{
  public $_password;
  public $_username;
  public $_email;
  public $_dbh;
  public $_sql;
  public $_stmt;

  public function __construct()
  {
    $dh = new model;
    $this->_dbh = $dh->initDb();
  }
  public function initAdmin($username, $password, $email)
  {

    $this->_password = password_hash($password, PASSWORD_DEFAULT);
    $this->_username = $username;
    $this->_email = $email;

    $this->_sql = "INSERT INTO adminuser(username, password, email) VALUES (:username, :password, :email)";
    var_dump($this->_dbh);
    $this->_stmt = $this->_dbh->prepare($this->_sql);
    $this->_stmt->bindValue(':username', $this->_username); 
    $this->_stmt->bindValue(':password', $this->_password);
    $this->_stmt->bindValue(':email', $this->_email);
    $this->_stmt->execute();
    echo $this->_username . "admin user has been created";
    return $this->_username . "admin user has been created";
  }


  public function login()
  {


    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

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
        header('Location: /projet_4/index.php?route=backOffice');
      } else {
        $_SESSION['isAdmin'] = false;
        $_SESSION['authUser'] = NULL;
        $_SESSION['id'] = NULL;
        header('Location: /projet_4/index.php?route=backOffice');
      }
    }
  }
  public function logout()
  {
    if (session_status() == PHP_SESSION_NONE) {
      //session has not started
      session_start();
    }

    $_SESSION['isAdmin'] = false;
    $_SESSION['authUser'] = NULL;
    $_SESSION['id'] = NULL;
    header('Location: /projet_4/controllers/backOffice.php');
  }
}
