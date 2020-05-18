<?php 
                  $newpost = new post();
                  $newpost->getPostById($_GET['idPost']);?>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin Article </title>
</head>

<body>
        <h1>Rédaction d'un article : </h1>
        <form method = 'post' action ='/projet_4/index.php?route=updatePostContent&idPost=<?php echo $_GET['idPost']?>'>
        <input type="text" id="postTitle" name="title" label="title" placeholder="Titre" value = "<?php echo $newpost->_recup[0];?>">
        <div>
            
            <div>
              <textarea name="post"><?php echo $newpost->_recup[1];?></textarea></div>
            <div>
<button type = 'submit' id="publish">Publier</button>
</form>
</div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'post' );/*
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