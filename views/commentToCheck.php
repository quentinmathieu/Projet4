<?php require_once('../models/post.php');
require_once('../models/comment.php');
$newpost = new post($newDB->_dbh);
$newcomment = new comment($newDB->_dbh);
$newcomment->commentNotChecked();
?>


    <h2>COMMENTAIRES</h2>
    <table>

        <tr class="table-first-line">
            <th>Pseudo</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Supprimer</th>
            <th>Valider</th>
            <th>Afficher</th>
        </tr>
        <?php
        foreach ($newcomment->_comments as $newcomment->_comment) {
            echo '<tr>
                                <td>' . $newcomment->_comment["author"] . '</td>
                                <td>' . $newcomment->_comment["content"] . '</td> 
                                <td>' . $newcomment->_comment["date"] . '</td>
                                <td>' . '<a href="../models/check.php?deleteId=' . $newcomment->_comment["id"] . "& check=0" .'">x</a>' . '</td>
                                <td>' . '<a href="../models/check.php?deleteId=' . $newcomment->_comment["id"] . "& check=1" .'">v</a>' . '</td>
                                <td>' . '<a href="../views/viewPost.php?idPost=' . $newcomment->_comment["FK_post"] . '">Afficher</a>' . '</td>
                            </tr>';
        }
        ?>

    </table>
    