<?php
require_once("../models/post.php");
        $newpost = new post($newDB->_dbh) ;
$newpost->sendPost(); ?>


<html>

<head>
    <meta charset="utf-8">
    <title>Admin Article </title>
</head>

<body>
        <h1>Rédaction d'un article : </h1>
        <input type="text" id="postTitle" name="title" label="title" placeholder="Titre">
        <div>
            
            <div><textarea name="editor"></textarea></div>
            <div>
<button id="publish">Publier</button>
</div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'editor' );
            $('#publish').on('click', function(){
$.ajax({
    method: "POST",
    /*data: { 
      "post": CKEDITOR.instances.editor.getData(),
      "title": $("#postTitle").val(),
    },*/
    success: function(data){
        console.log($("#postTitle").val());
       $.post("/projet_4/models/post.php","<?$newpost->sendPost(); ?>", { post : CKEDITOR.instances.editor.getData(), title : $("#postTitle").val() });
       
    }
})
});
        </script>

</body>

</html>
