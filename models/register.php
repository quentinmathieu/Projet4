<?php
    require_once('config.php');
    class createAdmin extends createPDO {
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
    public function initAdmin(){
        
        $this->_password = password_hash("capitol", PASSWORD_DEFAULT);
        $this->_username = "admin";
        $this->_email = "admin@email.com";
        
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
}
$newAdmin = new createAdmin ($newDB->_dbh);
$newAdmin->initAdmin(); 

?>