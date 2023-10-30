<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Lecture</title>
</head>
<body>
    <a href="login.php">Connexion</a>
    <?php
        # Ici je défini un index dans le tableau $_GET qui est page et qui vaut read ce n'est pas des valeur générique 
        # J'aurai bien pu mettre Ananas comme index et sucre comme valeur
        # Ce $_GET va être récupérer par toute les page que on inclus
        $_GET['page'] = 'read';
        require_once("../Controllers/read_ctrl.php");
    ?>

        <?php
            foreach ($Tableau as $ligne) {
                echo "<ul>";

                foreach ($ligne as $column) {
                    echo "<li>$column</li>";
                }

                echo "</ul><br>";
            }
        ?>


</body>
</html>