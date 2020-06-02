<?php
$newpost = new post();
$newcomment = new comment();
$newcomment->commentNotChecked();


?>


<h2>COMMENTAIRES</h2>
<table id="tableCom" class="table table-striped table-bordered table-sm" class="table-responsive">
    <thead>
        <tr class="table-first-line">
            <th>Pseudo</th>
            <th id="commentContent">Contenu</th>
            <th>Date</th>
            <th>Supprimer</th>
            <th>Valider</th>
            <th>Afficher</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($newcomment->_comments as $newcomment->_comment) {
            echo '<tr>
                                <td>' . $newcomment->_comment["author"] . '</td>
                                <td class ="contentTabComments">' . $newcomment->_comment['content'] . '</td> 
                                
                                <td>' . $newcomment->_comment["date"] . '</td>
                                <td class="tableIcons">' . '<a href="index.php?route=checkComment&deleteId=' . $newcomment->_comment["id"] . "& check=0" . '"><i class="fas fa-trash"></i></a>' . '</td>
                                <td class="tableIcons">' . '<a href="index.php?route=checkComment&deleteId=' . $newcomment->_comment["id"] . "& check=1" . '"><i class="fas fa-check"></i></a>' . '</td>
                                <td class="tableIcons">' . '<a href="index.php?route=viewPost&idPost=' . $newcomment->_comment["FK_post"] . '"><i class="fas fa-eye"></a>' . '</td>
                            </tr>';
        }

        ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $("#tableCom").DataTable({

language: {
"sEmptyTable":     "Aucune donnée disponible dans le tableau",
"sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
"sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
"sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
"sInfoPostFix":    "",
"sInfoThousands":  ",",
"sLengthMenu":     "Afficher _MENU_ éléments",
"sLoadingRecords": "Chargement...",
"sProcessing":     "Traitement...",
"sSearch":         "Rechercher :",
"sZeroRecords":    "Aucun élément correspondant trouvé",
"oPaginate": {
    "sFirst":    "Premier",
    "sLast":     "Dernier",
    "sNext":     "Suivant",
    "sPrevious": "Précédent"
},
"oAria": {
    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
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
        ;


    });
</script>