<?php
    session_start();
    if ($_SESSION['isAdmin']) {
        //echo "Welcome " . $_SESSION['authUser'];
        //echo '; Id:' . $_SESSION['id'];
        require_once("views/accueil.php");
    }else {
        echo "sefesf";
    }

    ?>

