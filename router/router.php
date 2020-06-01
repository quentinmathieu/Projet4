<?php
require_once('models/config.php');
require_once('controllers/backController.php');

class router
{
    public $_dbh;

    public function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }

    public function run()
    {
        try {
            if (isset($_GET['route'])) {
                $backController = new backController($this->_dbh);

                switch ($_GET['route']) {
                    case 'public':
                        $backController->public();
                        break;
                    case 'logIn':
                        $backController->LogIn();
                        break;
                    case 'backOffice':
                        $backController->backOffice();
                        break;
                    case 'newPost':
                        $backController->newPost();
                        break;
                    case 'uploadPost':
                        $backController->uploadPost();
                    break;
                    case 'disconnect':
                        $backController->disconnect();
                    break;
                    case 'deletePost':
                        $backController->deletePost();
                    break;
                    case 'editPost':
                        $backController->editPost();
                    break;
                    case 'updatePostContent':
                        $backController->updatePostContent();
                    break;
                    case 'viewPost':
                        $backController->viewpost();
                    break;
                    case 'newComment':
                        $backController->newComment();
                    break;
                    case 'checkComment':
                        $backController->checkComment();
                    break;
                    default:
                    echo 'page inconnue';
                    
                }
                
            } else {
                //require '';
            }
        } catch (Exception $e) {
            echo 'Erreur';
        }
    }
}
