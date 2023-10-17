<?php 
session_start();
require_once('inc/dbCat.php'); 

if (!empty($_SESSION)) {
    $select = $bdd->prepare('SELECT * FROM users WHERE id=?');
    $select->execute(array(
        $_SESSION['id']
    ));
    $select = $select->fetch();
    if ($select['role'] < 3) {
        header('Location: index.php'); 
    } 
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Panel Admin</title>
</head>
<body>
    <?php 
        $_GET['page'] = "paneladmin";
        include 'inc/header.php' 
    ?>
    <br><br><br><br>


    <form action="function/AddCat.php" method="post">
        <h2>Rajout de chat </h2>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <label for="color">Couleur :</label>
        <input type="text" name="color" id="color" required>
        <label for="photo">Photo :</label>
        <input type="file" name="photo" id="photo" accept="image/png, image/jpeg" required>
        <label for="description">Déscription :</label>
        <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
        <label for="male">Male</label>
        <input type="radio" name="sexe" id="sexe" value="m" required>
        <label for="female">Femelle</label>
        <input type="radio" name="sexe" id="sexe" value="f" required>
        <input type="submit" value="Ajouter le chat">
    </form>

    <form action="function/RemoveCat.php" class="cat" method="post">
        <table>
            <tr>
                <th>Identification :</th>
                <th>Prénom :</th>
                <th>Couleur :</th>
                <th>Description :</th>
                <th>Photo :</th>
            </tr>
            <?php
                $select = $bdd->prepare('SELECT * FROM cat');
                $select->execute();
                $select = $select->fetchAll();
                if (!empty($select)) {
                    # Le foreach prend tout ce qui ce trouve dans $select et le range dans les variable $index qui sera l'index
                    # et valeur qui est son les valeur de l'index
                    foreach ($select as $valeur) {
                        $id = $valeur['id'];
                        $prenom = $valeur['prenom'];
                        $color = $valeur['color'];
                        $description = $valeur['description'];
                        $photo = $valeur['photo'];
                        $veto = $valeur['veto'];

                        echo "<tr> 
                            <td> $id </td>
                            <td> $prenom </td>
                            <td> $color </td>
                            <td> $description </td>
                            <td> $photo </td>
                            <td> <button name='veto' value='$id'>Vétérinaire</button> </td>
                            <td> <button name='transfer' value='$id'>Transferer</button> </td>
                            <td> <button name='delete' value='$id'>Supprimer</button> </td>
                        </tr>";
                    }
                }
            ?>
        </table>
    </form>






    <br><br><br><br><br><br><br><br>
    <?php include 'inc/footer.php' ?>

</body>
</html>