<?php
require_once('../index.php');
class post 
{
    public $_password  ;
    public $_username ;
    public $_email ;
    public $_dbh ;
    public $_sql ;
    public $_stmt ;
    
   public function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }

public function sendPost(){
    var_dump(isset($_SESSION['id']));
    if (!isset($_POST["title"]) || isset($_POST["post"])) {
        
        $this->sql = "INSERT INTO post(title, content,  FK_adminUser, date)) VALUES (:title, :content, :authorId, :date)";
    
        $this->stmt = $this->_dbh->prepare($this->sql);
        $this->stmt->bindValue(':title', $_POST['title']);
        echo $_POST['title'];
        $this->stmt->bindValue(':content', $_POST['post']);
        $this->stmt->bindValue(':authorId', $_SESSION['id']);
        $this->stmt->bindValue(':date', date("Y-m-d H:i:s"));
        $this->stmt->execute();
        
      return;
    }
    else echo "\nnone";
}
}
$newpost = new post($newDB->_dbh) ;
$newpost->sendPost(); 
    ?>