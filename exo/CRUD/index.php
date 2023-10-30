<?php
    require_once('./Controllers/read_ctrl.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        th, td {
            border: 1px solid black;
            padding: 25px;
        }
    </style>
</head>
<body>
    <!-- CRUD: CREATE(INSERT INTO), READ(SELECT), UPDATE, DELETE

    
    Vous allez avoir plusieurs fichier 
    Dans un dossier 'Views' vous avez: create.php, read.php, update.php
    Dans un dossier 'Controllers' vous avez: create_ctrl.php, read_ctrl.php, update_ctrl.php, delete_ctrl.php 

    Vous devez créer une base de donnée que vous nommerez crud avec interclassement 
    utf8_general_ci (mb3 ou mb4)

    Dans cette base de donnée, vous allez créer une table user avec 3 attributs id, pseudo, mot_de_passe, description

    L'id' sera un entier et la clé primaire de la table sera auto incrémenté
    "Pseudo" sera en varchar 255 tout comme "motDePasse"
    "description" sera en TEXT

    L'index.php affichera un tableau de user, chaque ligne de ce tableau affichera les informations 
    (id, pseudo, mot de passe hashé, description) de cet user et permettra aussi la suppression, 
    la modification et l'affichage d'un user via un bouton ou un lien
    L'index.php affichera aussi un bouton permettant la création d'un user
    create.php affichera le formulaire de création d'user
    update.php affichera le formulaire prérempli d'user afin de la modifier
    read.php afficher une liste à puce des informations de l'user

-->
    <form action="Views/create.php" method="post">        
        <button type="submit">Ajouter utilisateur</button>
        <a href="Views/login.php">Connexion</a>
        <br><br><br><br>

        <table>
            <tr>
                <th>ID :</th>
                <th>Pseudo :</th>
                <th>Mot de passe :</th>
                <th>Description :</th>
                <th>Actions :</th>
            </tr>
            <?php
                foreach ($Tableau as $ligne) {
                    echo '<tr>';

                    foreach ($ligne as $column) {
                        echo "<td>$column</td>";
                    }
                    
                    echo "<td> 
                        <button name='modify' value='$ligne->id' formaction='Views/update.php'>Modifier</button> 
                        <button name='delete' value='$ligne->id' formaction='Controllers/delete_ctrl.php'>Supprimer</button> 
                    </td>";

                    echo '</tr>';
                }
            ?>
        </table>
    </form>



</body>
</html>