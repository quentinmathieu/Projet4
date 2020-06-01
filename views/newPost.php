<html>
<?php
require_once('views/header.php');
?>

<body>
    <h1>Rédaction d'un article : </h1>
    <form method='post' action='/projet_4/index.php?route=uploadPost'>
        <input type="text" id="postTitle" name="title" label="title" placeholder="Titre">
        <div>

            <div><textarea name="post"></textarea></div>
            <!--<textarea id="editeur"></textarea>-->

    
   
        </div>

        <button id="publish">Publier</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    
    <script>
        //document.querySelector('#editeur').mdbWYSIWYG();
        CKEDITOR.replace('post');
    </script>

</body>
<?php
require_once('views/scripts.php');
require_once('views/footer.php');
?>
</html>