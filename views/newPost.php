<?php
require_once('views/header.php');
?>

<section id="redac">
    <h2>Rédaction d'un article</h2>
    <form class="formRedac" method='post' action='/projet_4/index.php?route=uploadPost'>
        <input type="text" id="postTitle" name="title" placeholder="Titre" class="form-control">
        <div>

            <div><textarea name="post" id="post"></textarea></div>



        </div>

        <button id="publish" class="btn  btn-brown ">Publier</button>
    </form>



    <script>
        tinymce.init({
            selector: '#post',
            height: "500",
        });
    </script>


</section>



<?php
require_once('views/scripts.php');
require_once('views/footer.php');
?>