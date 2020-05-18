<?php 
require_once('models/config.php');
require_once('controllers/backController.php');

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
                if($_GET['route'] === 'logIn'){
                    
                    $logIn = new backController($this->_dbh);
                    $logIn->LogIn();
                    
                }
                if($_GET['route'] === 'backOffice'){
                    
                    $backOffice = new backController($this->_dbh);
                    $backOffice->backOffice();
                    
                }
                if($_GET['route'] === 'newPost'){
                    
                    $newPost = new backController($this->_dbh);
                    $newPost->newPost();
                    
                }

                if($_GET['route'] === 'uploadPost'){
                    
                    $uploadPost = new backController($this->_dbh);
                    $uploadPost->uploadPost();
                    
                }

                if($_GET['route'] === 'disconnect'){
                    
                    $disconnect = new backController($this->_dbh);
                    $disconnect->disconnect();
                    
                }

                if($_GET['route'] === 'deletePost'){
                    
                    $deletePost = new backController($this->_dbh);
                    $deletePost->deletePost();
                    
                }
                if($_GET['route'] === 'editPost'){
                    
                    $editPost = new backController($this->_dbh);
                    $editPost->editPost();
                    
                }
                if($_GET['route'] === 'updatePostContent'){
                    
                    $updatePostContent = new backController($this->_dbh);
                    $updatePostContent->updatePostContent();
                    
                }
                if($_GET['route'] === 'viewPost'){
                    
                    $viewpost = new backController($this->_dbh);
                    $viewpost->viewpost();
                    
                }
                if($_GET['route'] === 'newComment'){
                    
                    $newComment = new backController($this->_dbh);
                    $newComment->newComment();
                    
                }

                if($_GET['route'] === 'checkComment'){
                    
                    $checkComment = new backController($this->_dbh);
                    $checkComment->checkComment();
                    
                }
                else{
                   echo 'page inconnue';
                }
            }
            else{
                //require '';
            }
        }
        catch (Exception $e)
        {
            echo 'Erreur';
        }
    }
}



?>