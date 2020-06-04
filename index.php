<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8">
   
  <meta name="viewport" content="width=device-width" />
  
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
  <!-- tiny  -->
  <script src="https://cdn.tiny.cloud/1/pe3z21kzshfys1hor86rn7csblzltv08uws712fd5tdv6zc7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <!-- perso  -->
  <link href="content/MDB/css/style.css" rel="stylesheet">

  <title>My blog</title>

</head>

<body>
<?php
 
require_once('models/config.php');
require_once('router/router.php');







$router = new router($newDB->_dbh);
$router->run();
?>

</body>

</html>