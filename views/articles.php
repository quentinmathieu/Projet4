<section id="PostList">


  <h2>TICKETS</h2>
  <table id="tablePost" class="table table-striped table-bordered table-sm " class="table-responsive" cellspacing="0">
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
                                <td class="tableIcons">' . '<a href="index.php?route=deletePost&deleteId=' . $newpost->_post["id"] . '"><i class="fas fa-trash"></i></a>' . '</td>
                                <td class="tableIcons">' . '<a href="index.php?route=editPost&idPost=' . $newpost->_post["id"] . '"><i class="fas fa-pen"></i></a>' . '</td>
                                <td class="tableIcons">' . '<a href="index.php?route=viewPost&idPost=' . $newpost->_post["id"] . '"><i class="fas fa-eye"></i></a>' . '</td>
                            </tr>';
      }
      ?>
    </tbody>


  </table>


  <?php
  require_once('views/scripts.php')
  ?>

  <script>
    $(document).ready(function() {
      $("#tablePost").DataTable({

        language: {
          "sEmptyTable": "Aucune donnée disponible dans le tableau",
          "sInfo": "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
          "sInfoEmpty": "Affichage de l'élément 0 à 0 sur 0 élément",
          "sInfoFiltered": "(filtré à partir de _MAX_ éléments au total)",
          "sInfoPostFix": "",
          "sInfoThousands": ",",
          "sLengthMenu": "Afficher _MENU_ éléments",
          "sLoadingRecords": "Chargement...",
          "sProcessing": "Traitement...",
          "sSearch": "Rechercher :",
          "sZeroRecords": "Aucun élément correspondant trouvé",
          "oPaginate": {
            "sFirst": "Premier",
            "sLast": "Dernier",
            "sNext": "Suivant",
            "sPrevious": "Précédent"
          },
          "oAria": {
            "sSortAscending": ": activer pour trier la colonne par ordre croissant",
            "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
          },
          "select": {
            "rows": {
              "_": "%d lignes sélectionnées",
              "0": "Aucune ligne sélectionnée",
              "1": "1 ligne sélectionnée"
            }
          }
        }


      });
    })
  </script>

</section>