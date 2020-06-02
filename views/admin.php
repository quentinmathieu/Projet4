<?php
    session_start();
    if ($_SESSION['isAdmin']) {
        require_once("views/accueil.php");
    }else {
        header('Location: /projet_4/index.php?route=logIn');
    }

    ?>

