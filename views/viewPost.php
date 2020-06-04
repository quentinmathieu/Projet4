<?php
$newpost = new post();
$newpost->getPostById($_GET['idPost']);
$commentList = new comment();
$commentList->commentList($_GET['idPost']);
$checkComment = new comment();
$checkComment->commentNotCheckedByPost($_GET['idPost']);
require_once("views/header.php");

?>


<section id="Article">
    <div class="container my-5 py-5 z-depth-1">
        <h1 id="titlePostView"><?php echo $newpost->_recup[0]; ?></h1>
        <p id="contentPostView"><?php echo $newpost->_recup[1]; ?>
    </div>
</section>

<section id="Commenaires">
    <div class='container my-5 py-5 z-depth-1'>
        <h2>Commentaires</h2>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if ($_SESSION['isAdmin'] == true) {
            foreach ($checkComment->_comments as $checkComment->_comment) {
                echo '<div  class="media-body text-center text-md-left ml-md-3 ml-0 comment">
            
            <h5 class="font-weight-bold mt-0">' . utf8_encode ($checkComment->_comment["author"]) . '</h5></br>
            ' . utf8_encode ($checkComment->_comment["content"]) . '</p> </br>
                                            <div>' . $checkComment->_comment["date"] . '</div> </br>
                                            <div>' . '<a href="index.php?route=checkComment&deleteId=' . $checkComment->_comment["id"] . "& check=0" . '">Supprimer</a>' . '</br>
                                            ' . '<a href="index.php?route=checkComment&deleteId=' . $checkComment->_comment["id"] . "& check=1" . '">Valider</a>' . '</div> </div> </br>';
            }
        }
        foreach ($commentList->_comments as $commentList->_comment) {
            echo '
                                <div class="media-body text-center text-md-left ml-md-3 ml-0">  
                                <h5 class="font-weight-bold mt-0">' . utf8_encode ($commentList->_comment["author"]) . '</h5>
                                <p>' . utf8_encode ($commentList->_comment["content"]) . '</p>
                                <p>' . $commentList->_comment["date"] . '</p></div>
                            ';
        }
        ?>

        <form class="container  " method='post' action='/projet_4/index.php?route=newComment&idPost=<?php echo $_GET['idPost'] ?>'>
            <div class="form-group mt-4 commentForm">
                <h3>Laissez un commentaire!</h3>
                <textarea name="commentContent" class="form-control"  placeholder="Votre commentaire*"></textarea>




                <input type="text" id="commentAuthor" name="commentAuthor" placeholder="Pseudo*">
                <input type="text" id="commentMail" name="commentMail" placeholder="mail@domaine">

                <button type='submit' id="commentButton" class="btn btn-brown btn-sm">Publier</button>
            </div>


        </form>
    </div>







    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <script>
        /*CKEDITOR.replace('post');
        /*
                    $('#publish').on('click', function(){
        $.ajax({
            method: "POST",
            /*data: { 
              "post": CKEDITOR.instances.editor.getData(),
              "title": $("#postTitle").val(),
            },
            success: function(data){
                console.log($("#postTitle").val());
                console.log(CKEDITOR.instances.editor.getData());
               $.post("/projet_4/models/modifPost.php?idPost=''", { post : CKEDITOR.instances.editor.getData(), title : $("#postTitle").val() });
               
            }
        })
        });*/
    </script>
</section>

    <?php
    require_once("views/scripts.php");
    require_once("views/footer.php");
    ?>

