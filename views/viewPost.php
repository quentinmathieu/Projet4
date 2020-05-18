<?php
$newpost = new post();
$newpost->getPostById($_GET['idPost']);
$commentList = new comment();
$commentList->commentList($_GET['idPost']);
$checkComment = new comment();
$checkComment->commentNotCheckedByPost($_GET['idPost']);

?>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $newpost->_recup[0]; ?></title>
</head>

<body>
    <h1 id="titlePostView"><?php echo $newpost->_recup[0]; ?></h1>
    <p id="contentPostView"><?php echo $newpost->_recup[1]; ?></p>
    <form method='post' action='/projet_4/index.php?route=newComment&idPost=<?php echo $_GET['idPost'] ?>'>
        <input type="text" id="commentAuthor" name="commentAuthor" label="title" placeholder="Pseudo">
        <input type="text" id="commentMail" name="commentMail" label="title" placeholder="mail@domaine">


        <div>
            <textarea name="commentContent"></textarea></div>

        <button type='submit' id="commentButton">Publier</button>
        </div>
    </form>

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    if ($_SESSION['isAdmin'] == true) {
        foreach ($checkComment->_comments as $checkComment->_comment) {
            echo '<tr>
                                            <td>' . $checkComment->_comment["author"] . '</td>
                                            <td>' . $checkComment->_comment["content"] . '</td> 
                                            <td>' . $checkComment->_comment["date"] . '</td>
                                            <td>' . '<a href="index.php?route=checkComment&deleteId=' . $checkComment->_comment["id"] . "& check=0" . '">x</a>' . '</td>
                                            <td>' . '<a href="index.php?route=checkComment&deleteId=' . $checkComment->_comment["id"] . "& check=1" . '">v</a>' . '</td>
                                            <td>' . '<a href="index.php?route=viewPost&idPost=' . $checkComment->_comment["FK_post"] . '">Afficher</a>' . '</td>
                                        </tr>';
        }
    }
    foreach ($commentList->_comments as $commentList->_comment) {
        echo '<div class="comment">
                                <p>' . $commentList->_comment["author"] . '</p>
                                <p>' . $commentList->_comment["content"] . '</p>
                                <p>' . $commentList->_comment["date"] . '</p>
                            </div>';
    }
    ?>
    <style>
        .comment {
            border-width: 2px;
            background-color: rgb(250, 250, 200);
        }
    </style>
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

</body>

</html>