



<h2>TICKETS</h2>
  <table id="tablePost" class="table table-striped table-bordered table-sm" class ="table-responsive" cellspacing="0" width="90%">
    <thead>
    <tr class="table-first-line">
      <th>Auteur</th>
      <th>Titre</th>
      <th>Date</th>
      <th>Supprimer</th>
      <th>Modifier</th>
      <th>Afficher</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($newpost->_posts as $newpost->_post) {
      echo '<tr>
                                <td>' . $newpost->_post["adminUser"] . '</td>
                                <td>' . $newpost->_post["title"] . '</td> 
                                <td>' . $newpost->_post["date"] . '</td>
                                <td>' . '<a href="index.php?route=deletePost&deleteId=' . $newpost->_post["id"] . '"><i class="fas fa-trash"></i></a>' . '</td>
                                <td>' . '<a href="index.php?route=editPost&idPost=' . $newpost->_post["id"] . '"><i class="fas fa-pen"></i></a>' . '</td>
                                <td>' . '<a href="index.php?route=viewPost&idPost=' . $newpost->_post["id"] . '">Afficher</a>' . '</td>
                            </tr>';
    }
    ?>
    </tbody>


  </table>
  
<?php
require_once('views/scripts.php')
?>
  <script> $(document).ready(function () {
  $("#tablePost").DataTable();
  //$('.dataTables_length').addClass('bs-select');
}); </script>