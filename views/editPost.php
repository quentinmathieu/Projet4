<?php
$newpost = new post();
$newpost->getPostById($_GET['idPost']);
require_once("views/header.php");
?>


<section id="redac">
    <h2>Rédaction d'un article</h2>
    <form class="formRedac" method='post' action='/projet_4/index.php?route=updatePostContent&idPost=<?php echo $_GET['idPost'] ?>'>
        <input type="text" id="postTitle" name="title" label="title" placeholder="Titre" class="form-control" value="<?php echo $newpost->_recup[0]; ?>">
        <div>
            <div>
                <textarea name="post" id="post"><?php echo $newpost->_recup[1]; ?></textarea>
            </div>
            <div>
                <button type='submit' id="publish" class="btn  btn-brown ">Publier</button>
            </div>
    </form>
    
    <script>
    tinymce.init({
      selector: '#post',
      height : "500",
    });
  </script>
</section>
<?php
require_once("views/footer.php");
?>