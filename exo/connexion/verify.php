<?php 
require_once('../../function/db.php');
if (isset($_GET) && !empty($_GET)) {
    $select = $bdd->prepare('SELECT * FROM users WHERE token=?');
    $select->execute(array(
        $_GET['token']
    ));
    $select = $select->fetchAll();
    if (empty($select)) 
        header('Location: login.php');
} else 
    header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérifier</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="submit" value="Confirmer">
    </form>

    <?php 
    if (isset($_POST) && !empty($_POST)) {
        $update = $bdd->prepare("UPDATE users SET token=NULL, confirm=1 WHERE token=?");
        $update->execute(array(
            $_GET['token']
        ));
        $update = $update->rowCount();
        if ($update > 0) header('Location: login.php?success=mail');
        else echo '<script> alert("T\'es nul ta pas réussi !") </script>';
    }
    ?>
</body>
</html>