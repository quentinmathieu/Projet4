<html>
    
<?php
$newpost = new post() ;
$newpost->postList(); 

require_once("views/header.php");

?>


<body>
<div id="index"  >
    
    <?php
    foreach ($newpost->_posts as $newpost->_post) {
      echo '<div class = "card text-center my-5 py-5 z-depth-1 mb3"  style="width: 60%; margin : auto; max-height: 200px; overflow : hidden">
        <div class="card-body">
          <h5 class="card-title">' . $newpost->_post["title"] . ' </br>
          publié par ' . $newpost->_post["adminUser"] . '
          le ' . substr($newpost->_post["date"], 0,10) . '</h5>
          <div class="card-text">' . $newpost->_post["content"] . '</div>
          <a href="index.php?route=viewPost&idPost=' . $newpost->_post["id"] . '"  class="lireLaSuite btn btn-link" >Lire la suite</a>
          
        </div>
                     
     </div>' ;
    }
    ?>


  </div>
</body>
<?php 
require_once('views/scripts.php');
require_once('views/footer.php'); 
?>

</html>