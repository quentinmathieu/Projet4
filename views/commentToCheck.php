<?php 
$newpost = new post();
$newcomment = new comment();
$newcomment->commentNotChecked();


?>


    <h2>COMMENTAIRES</h2>
    <table id="tableCom" class="table table-striped table-bordered table-sm" class ="table-responsive" cellspacing="0" width="90%">

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
                                <td>' . '<a href="index.php?route=checkComment&deleteId=' . $newcomment->_comment["id"] . "& check=0" .'"><i class="fas fa-trash"></i></a>' . '</td>
                                <td>' . '<a href="index.php?route=checkComment&deleteId=' . $newcomment->_comment["id"] . "& check=1" .'"><i class="fas fa-check"></i></a>' . '</td>
                                <td>' . '<a href="index.php?route=viewPost&idPost=' . $newcomment->_comment["FK_post"] . '">Afficher</a>' . '</td>
                            </tr>';
        }
        
        ?>

    </table>

    <script> $(document).ready(function () {
  $("#tableCom").DataTable();
  $('.dataTables_length').addClass('bs-select');
}); </script>
    