<?php
class post
{
    public $_dbh;
    public $_sql;
    public $_stmt;
    public $_posts; //content, title

    public function __construct()
    {
        $dh = new model;
        $this->_dbh = $dh->initDb();
    }

    public function sendPost()
    {
        date_default_timezone_set("Europe/Paris");
        date_default_timezone_set(date_default_timezone_get());
        if (session_status() == PHP_SESSION_NONE) {

            session_start();
        }
        if (isset($_POST["title"]) && isset($_POST["post"]) && $_POST["title"] != "" && $_POST["post"] != "") {

            $this->_sql = "INSERT INTO post(title, content, FK_adminUser, date) VALUES (:title, :content, :authorId, :date)";

            $this->_stmt = $this->_dbh->prepare($this->_sql);

            $this->_stmt->bindValue(':title', $_POST["title"]);
            $this->_stmt->bindValue(':content', $_POST["post"]);
            $this->_stmt->bindValue(':authorId', $_SESSION['id']);
            $this->_stmt->bindValue(':date', date("Y-m-d H:i:s"));
            $this->_stmt->execute();
            return;
        }
    }

    public function deletePost($deleteId)
    {
        if (session_status() == PHP_SESSION_NONE) {

            session_start();
        }
        if ($_SESSION['isAdmin']) {

            if (isset($_GET["deleteId"])) {

                $this->_sql = "DELETE 
        FROM 
        post 
        WHERE id=:deleteId";

                $this->_stmt = $this->_dbh->prepare($this->_sql);

                $this->_stmt->bindValue(':deleteId', $_GET["deleteId"]);
                $this->_stmt->execute();
                header('Refresh: 1');
                return;
            }
        }
    }

    public function getPostById($idPost)
    {
        $this->_posts = [];
        $this->_sql = "SELECT
                title,
                content
            FROM
                post
            WHERE id=:idPost";
        $this->_stmt = $this->_dbh->prepare($this->_sql);
        $this->_stmt->bindValue(':idPost', $_GET["idPost"]);
        $this->_stmt->execute();
        $this->_recup = $this->_stmt->fetch();
        return $this->_recup;
    }

    public function updatePostContent($idPost)
    {
        if (session_status() == PHP_SESSION_NONE) {

            session_start();
        }
        if (isset($_POST["title"]) && isset($_POST["post"]) && $_POST["title"] != "" && $_POST["post"] != "") {

            $this->_sql = "UPDATE post SET title = :title,  content = :content WHERE id=:idPost";

            $this->_stmt = $this->_dbh->prepare($this->_sql);

            $this->_stmt->bindValue(':title', $_POST["title"]);
            $this->_stmt->bindValue(':content', $_POST["post"]);
            $this->_stmt->bindValue(':idPost', $_GET["idPost"]);
            $this->_stmt->execute();
        }
        return true;
    }

    public function postList()
    {
        $this->_posts = [];
        $this->_sql = "SELECT
        
                post.id,
                post.title,
                post.content,
                adminuser.username as adminUser,
                post.date
                
            FROM
                post
            lEFT JOIN
                adminuser
            ON
                post.FK_adminUser=adminuser.id

            ORDER BY date DESC;";
        $this->_stmt = $this->_dbh->prepare($this->_sql);
        $this->_stmt->execute();
        $this->_posts = $this->_stmt->fetchAll();
    }

    public function postColumn()
    {
        $this->_posts = [];
        $this->_sql = "SELECT
                id,
                title,
                FK_adminUser as adminUser,
                date,
                content
            FROM
                post
            ORDER BY date DESC;";
        $this->_stmt = $this->_dbh->prepare($this->_sql);
        $this->_stmt->execute();
        $this->_posts = $this->_stmt->fetchAll();
    }
}
