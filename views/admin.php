<?php
    require_once('../models/admin.php');
    session_start();
    if ($_SESSION['isAdmin']) {
        echo "Welcome " . $_SESSION['authUser'];
        echo '; Id:' . $_SESSION['id'];
        require_once("accueil.php");
    }else {
        echo "Get out you're not authorized";
    }

    ?>

