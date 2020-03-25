<?php
    
    session_start();
    if ($_SESSION['isAdmin']) {
        echo "Welcome " . $_SESSION['authUser'];
    }else {
        echo "Get out you're not authorized";
    }

    ?>