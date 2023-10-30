<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
</head>
<body>
    <?php
        require_once('../inc/db.php');
        if (isset($_POST) && !empty($_POST)) {
            $select = $bdd->prepare('SELECT * FROM user WHERE id=?');
            $select->execute(array(
                $_POST['modify']
            ));
            $select = $select->fetch(PDO::FETCH_ASSOC);
        }
    ?>
    <form action="../Controllers/update_ctrl.php" method="post">
        <pre>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" value="<?php echo $select['pseudo'] ?>">

            <label for="password">Mot De Passe :</label>
            <input type="password" name="password" value="<?php echo $select['mot_de_passe'] ?>">
            
            <label for="description">Description :</label>
            <textarea name="description" id="desc" cols="30" rows="10"> <?php echo $select['description'] ?></textarea>
            
            <!-- <input type="submit" value="<?php// echo $_POST['modify'] ?>"> -->
            <!-- Ici je decide de faire un button est pas un input de type submit parce que dans la value du button je peux mettre ce qui me chante 
            et ca ne sera jamais afficher alors dans le input de type submit ce que je met dans le value est obligatoirement afficher -->
            
            <button name="modify" value="<?php echo $_POST['modify'] ?>">Modifier</button>
        </pre>
    </form>
</body>
</html>