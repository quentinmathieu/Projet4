<?php

class createPDO
{
    public $_hote = 'localhost';
    public $_port = '3308';
    public $_nom_bd = 'tblog';
    public $_utilisateur = 'root';
    public $_mot_passe = '';
    public $_dbh;



    public function init()
    {
        try {
            $this->_dbh = new PDO('mysql:host=' . $this->_hote . ';port=' . $this->_port . ';dbname=' . $this->_nom_bd, $this->_utilisateur, $this->_mot_passe);
            foreach ($this->_dbh->query('SELECT * FROM post') as $row) {
                print_r($row);
                
                return $this->dbh;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
$newDB = new createPDO;



?>
