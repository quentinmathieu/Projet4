<?php
require_once('models/admin.php');
require_once('models/config.php');
require_once('models/post.php');
require_once('models/comment.php');


class backController
{

  public $_dbh;

  public function __construct($dbh)
  {
    $this->_dbh = $dbh;
  }

  public function LogIn()
  {

    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    if ($_SESSION['isAdmin']) {

      header('Location: /projet_4/index.php?route=backOffice');
    } 
    
    else {
      $log = new Admin($this->_dbh);
      $log->login();
      //$log->initAdmin("admin","capitol","admin@email.com");

      require_once('views/log.php');
    }
  }


  public function public()
  {


    require_once('views/index.php');
  }
  public function backOffice()
  {


    require_once('views/admin.php');
  }


  public function newPost()
  {
    require_once('views/newPost.php');
  }

  public function uploadPost()
  {
    $uploadPost = new post();
    $uploadPost->sendPost();
    header('Location: /projet_4/index.php?route=backOffice');
  }

  public function disconnect()
  {
    $log = new Admin();
    $log->logout();
    header('Location: /projet_4/index.php?route=logIn');
  }

  public function deletePost()
  {
    $newpost = new post();
    $newpost->deletePost($_GET['deleteId']);
    header('Location: /projet_4/index.php?route=backOffice');
  }

  public function updatePostContent()
  {
    $updatePostContent = new post();
    $updatePostContent->updatePostContent($_GET['idPost']);
    header('Location: /projet_4/index.php?route=backOffice');
  }

  public function editPost()
  {
    require_once("views/editPost.php");
  }

  public function viewpost()
  {
    require_once("views/viewPost.php");
  }

  public function newComment()
  {
    $newcomment = new comment();
    $newcomment->sendComment($_GET['idPost']);
    header('Location: /projet_4/index.php?route=viewPost&idPost=' . $_GET['idPost']);
  }


  public function checkComment()
  {
    $newcomment = new comment();
    $newcomment->checkComment($_GET['deleteId'], $_GET['check']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }

  public function blog()
  {
    require_once("views/index.php");
  }
}
