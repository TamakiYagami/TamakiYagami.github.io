<?php
    require_once('../../function/db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../../scripts/jquery-3.7.1.min.js"></script>
    <title>Liste Annuaire</title>
    <link rel="stylesheet" href="style.css">
    <style>
        th {
            padding: 10px;
            background-color: burlywood;
        }
        td {
            padding: 10px;
            background-color: gray;
        }
        form div {
            margin: 0 auto 0 auto;
            justify-content: center;
        }

        form div * {
            margin: 15px ;
        }
    </style>
</head>
<body>
    <!-- Il devra avoir un tableau HTML qui récupère toute les lignes de la 
    base de donnée annuaire 

    En devra avoir la possibilité de modifier certaine ligne ou supprimé-->
    <form action="" method="post">
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
                <th>Actions</th>
            </tr>
        <?php
            $annuaire = $bdd->prepare('SELECT * FROM annuaire');
            $annuaire->execute();
            $annuaire = $annuaire->fetchAll(PDO::FETCH_CLASS);
            # Si le fetch est récupèrer en mode PDO;;FETCH_CLASS la variable qu'il nous renvoie est bien un
            # Tableau mais pas de type Array mais un type Object
            # Donc pour récupèrer les valeur qu'il ce trouve dans ce type de Tableau ce n'est plus 
            # $Tableau['index'] mais plutôt $Tableau->index
            if (!empty($annuaire)) {
                # Les valeur de annuaire ce mette dans la variable ligne
                # annuaire :
                #   * Première Ligne :
                #       * Première Colonne
                #       * Deuxième Colonne
                #   * Deuxième Ligne :
                #       * Première Colonne
                #       * Deuxième Colonne
                #   * Troisième Ligne :
                #       * Première Colonne
                #       * Deuxième Colonne



                foreach($annuaire as $ligne) {
                    echo '<tr>';

                    // echo '<pre>';
                    // var_dump($ligne);
                    // echo '</pre>';

                    // $id = $ligne['id_'];
                    // $nom = $ligne['nom'];
                    // $prenom = $ligne['prenom'];
                    // $id = $ligne['id_'];
                    // $nom = $ligne['nom'];
                    // $prenom = $ligne['prenom'];
                    // $id = $ligne['id_'];
                    // $nom = $ligne['nom'];
                    // $prenom = $ligne['prenom'];
                    // $prenom = $ligne['prenom'];

                    

                    foreach($ligne as $colonne) {
                        echo "<td>$colonne</td>";
                    }
                    echo '<td> 
                        <button name="remove" value="' . $ligne->id_annuaire . '">Supprimer</button>
                        <button name="modify" value="' . $ligne->id_annuaire . '">Modifier</button> 
                        </td>';                
                    # Comme notre tableau est en Object on fait comme ceci sinon o n aurai fait
                    // echo '<td> 
                    //     <button name="remove" value="' . $ligne['id_annuaire'] . '">Supprimer</button>
                    //     <button name="modify" value="' . $ligne['id_annuaire'] . '">Modifier</button> 
                    //     </td>';   

                    echo '</tr>';
                }
                if (isset($_POST) && !empty($_POST)) {
                    if (!empty($_POST['remove'])) {
                        $delete = $bdd->prepare('DELETE FROM annuaire WHERE id_annuaire=?');
                        $delete->execute(array(
                            $_POST['remove']
                        ));
                        header('Location: list.php');
                    } elseif (!empty($_POST['modify'])) {
                        header("Location: update.php?id_annuaire=" . $_POST['modify']);
                    }
                }
            }

        ?>
        </table>
    </form>
</body>
</html>