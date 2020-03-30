<?php

class model 
{
    public $_hote = 'localhost';
    public $_port = '3308';
    public $_nom_bd = 'tblog';
    public $_utilisateur = 'root';
    public $_mot_passe = '';
    public $_dbh;
    public $_row;



    public function initDb()
    
    {
        
        try {
            $this->_dbh = new PDO('mysql:host=' . $this->_hote . ';port=' . $this->_port . ';dbname=' . $this->_nom_bd, $this->_utilisateur, $this->_mot_passe);
            
            /*foreach ($this->_dbh->query('SELECT * FROM post') as $this->_row) {
                print_r($this->_row);
                
            }*/
            
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
            echo "BDD NULL";
        }
        
        return $this->_dbh;

    }

    
    
}



?>
