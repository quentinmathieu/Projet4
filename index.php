<?php
 
require_once('models/config.php');
require_once('router/router.php');







$router = new router($newDB->_dbh);
$router->run();
?>

<head>
    <meta charset="utf-8">
   
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="content/MDB/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="content/MDB/css/mdb.min.css">
  <!-- MDBootstrap Datatables  -->
  <link href="content/MDB/css/addons/datatables.min.css" rel="stylesheet">

  <!-- perso  -->
  <link href="content/MDB/css/style.css" rel="stylesheet">
</head>
<?php 


?>