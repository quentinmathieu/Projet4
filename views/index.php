<html>
    
<?php
$newpost = new post() ;
$newpost->postList(); 

require_once("views/header.php");

?>

<body>
<table id="tablePost" class="table table-striped table-bordered table-sm" class ="table-responsive" cellspacing="0" width="90%">
    <tr class="table-first-line">
      <th>Auteur</th>
      <th>Titre</th>
      <th>Date</th>
      <th>Supprimer</th>
      <th>Modifier</th>
      <th>Afficher</th>
    </tr>
    <?php
    foreach ($newpost->_posts as $newpost->_post) {
      echo '
                                <div>' . $newpost->_post["title"] . '</div> 
                                <div>' . $newpost->_post["date"] . '</div>
                                
                            ';
    }
    ?>


  </table>
</body>
<?php 
require_once('views/scripts.php');
require_once('views/footer.php'); 
?>

</html>