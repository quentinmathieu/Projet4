<h2>TICKETS</h2>
  <table>
    <tr class="table-first-line">
      <th>Auteur</th>
      <th>Titre</th>
      <th>Date</th>
      <th>Supprimer</th>
      <th>Modifier</th>
      <th>Afficher</th>
    </tr>
    <?php
    require_once('../models/post.php');
    foreach ($newpost->_posts as $newpost->_post) {
      echo '<tr>
                                <td>' . $newpost->_post["adminUser"] . '</td>
                                <td>' . $newpost->_post["title"] . '</td> 
                                <td>' . $newpost->_post["date"] . '</td>
                                <td>' . '<a href="../models/delete.php?deleteId=' . $newpost->_post["id"] . '">x</a>' . '</td>
                                <td>' . '<a href="../views/editPost.php?idPost=' . $newpost->_post["id"] . '">o</a>' . '</td>
                                <td>' . '<a href="../views/viewPost.php?idPost=' . $newpost->_post["id"] . '">Afficher</a>' . '</td>
                            </tr>';
    }
    ?>


  </table>