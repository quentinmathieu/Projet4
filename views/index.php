<?php

require_once('../models/post.php');
$newpost = new post($newDB->_dbh) ;
$newpost->postColumn(); 
?>

<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        foreach ($newpost->_posts as $newpost->_post) {
                            echo
                            "<div class='wrap-post'>
                                <div class='header-post'>
                                    <div class='title-post'>".$newpost->_post["title"].", par ".$newpost->_post["adminUser"]." le ".$newpost->_post["date"]."</div>
                                    </div>
                                </div>
                                <div class='content-post'>
                                    <div class='content'>".$newpost->_post["content"]."</div>                
                                    <div class='fade-content'><a href='/projet_4/article.php?p=".$newpost->_post["id"]."'>Lire la suite</a></div>
                               </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
