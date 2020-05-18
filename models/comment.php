<?php
class comment
{
    public $_dbh;
    public $_sql;
    public $_stmt;
    public $_comments; 

    public function __construct()
    {
        $dh = new model;
    $this->_dbh = $dh->initDb();
    }

    public function sendComment($idPost)
    {
        date_default_timezone_set("Europe/Paris");
        date_default_timezone_set(date_default_timezone_get());
        if (session_status() == PHP_SESSION_NONE) {

            session_start();
        }
        if (isset($_POST["commentContent"]) && isset($_POST["commentAuthor"])  && $_POST["commentContent"] != "" && $_POST["commentAuthor"] != "" ) {
            
            $this->_sql = "INSERT INTO comment(content, author, FK_post, email, date) VALUES ( :content, :author, :FK_post, :email, :date)";

            $this->_stmt = $this->_dbh->prepare($this->_sql);

            $this->_stmt->bindValue(':content', $_POST["commentContent"]);
            $this->_stmt->bindValue(':author' , $_POST['commentAuthor']);
            $this->_stmt->bindValue(':FK_post', $idPost);
            $this->_stmt->bindValue(':email', $_POST['commentMail']);
            $this->_stmt->bindValue(':date', date("Y-m-d H:i:s"));
            $this->_stmt->execute();

            return;
        }
    }

    public function checkComment($deleteId, $isAccepted)
    {
        if (session_status() == PHP_SESSION_NONE) {

            session_start();
        }
        if ( $isAccepted ==0) {

            $this->_sql = "DELETE 
        FROM 
        comment 
        WHERE id=:deleteId";

            $this->_stmt = $this->_dbh->prepare($this->_sql);

            $this->_stmt->bindValue(':deleteId', $_GET["deleteId"]);
            $this->_stmt->execute();

            return;
        }

        else {

            $this->_sql = "UPDATE
        comment 
        SET
        checked = 1
        WHERE id=:deleteId";

            $this->_stmt = $this->_dbh->prepare($this->_sql);

            $this->_stmt->bindValue(':deleteId', $_GET["deleteId"]);
            $this->_stmt->execute();

            return;
        }
        
    }



    public function commentList($idPost)
    {
        $this->_comments = [];
        $this->_sql = "SELECT
                author,
                content,
                date
            FROM
                comment
            WHERE FK_post = $idPost 
            AND checked = '1'
            ORDER BY date ASC;";
        $this->_stmt = $this->_dbh->prepare($this->_sql);
        $this->_stmt->execute();
        $this->_comments = $this->_stmt->fetchAll();
    }

    public function commentNotChecked()
    {
        $this->_comments = [];
        $this->_sql = "SELECT 
        id,
                author,
                content,
                FK_post,
                date
            FROM
                comment
            WHERE checked = 0
            ORDER BY date ASC;";
        $this->_stmt = $this->_dbh->prepare($this->_sql);
        $this->_stmt->execute();
        $this->_comments = $this->_stmt->fetchAll();
    }

}
