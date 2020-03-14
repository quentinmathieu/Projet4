<?php
    require_once('../include/config.php');
    require_once('../index.php');
    class createAdmin {
        private $_password  ;
        private $_username ;
        private $_email ;
        private $_sql ;
        private $_stmt ;
        

    public function init(){
        
        $this->_password = password_hash("capitol", PASSWORD_DEFAULT);
        $this->_username = "admin";
        $this->_email = "admin@email.com";
        
        $this->_sql = "INSERT INTO adminuser(username, password, email) VALUES (:username, :password, :email)";
        session_start();
        $this->_stmt = $newDB->init()->prepare($this->_sql);
        $this->_stmt->bindValue(':username', $this->_username);
        $this->_stmt->bindValue(':password', $this->_password);
        $this->_stmt->bindValue(':email', $this->_email);
        $this->_stmt->execute();
        echo $this->_username . "admin user had been created";
    }
    
}

    $newAdmin = new createAdmin;
       
?>