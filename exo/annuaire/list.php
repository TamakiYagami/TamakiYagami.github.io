<?php
    require_once('../../function/db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Annuaire</title>
</head>
<body>
    <!-- Il devra avoir un tableau HTML qui récupère toute les lignes de la 
    base de donnée annuaire 

    En devra avoir la possibilité de modifier certaine ligne ou supprimé-->
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Profession</th>
            <th>Ville</th>
            <th>Code Postale</th>
            <th>Adresse</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Description</th>
        </tr>
    <?php
        $select = $bdd->prepare('SELECT * FROM annuaire');
        $select->execute();
        $select = $select->fetchAll();
        if (!empty($select)) {
            foreach ($select as $ligne) {
                echo "<tr>";
                foreach($ligne as $colonne) {
                    echo "<td>$colonne</td>";
                }
                echo "</tr>";
            }
        }
    ?>
    </table>
</body>
</html>