
<?php
require_once('../../function/db.php');
session_start();
if (!empty($_SESSION)) header('Location: index.php');
if (!empty($_GET)) {
    if (isset($_GET['success'])) {
        if ($_GET['success'] == 'reset') echo '<script> alert("Votre mot de passe à été modifié") </script>';
        if ($_GET['success'] == 'mail') echo '<script> alert("Votre adresse mail à été confirmé") </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../../style/connexion.css">
</head>
<body>
    <form action="" method="post">
        <pre>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Se connecter">
            <a href="./forgotpassword.php">Mot de passe oublié ?</a>
            <a href="./register.php">Vous n'avez pas de compte ?</a>
        </pre>
    </form>
    <?php 
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM users WHERE (username=:login OR email=:login) AND password=:pass');
        $select->execute(array(
            'login' => $_POST['username'],
            'pass' => sha1($_POST['password'])
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        if (!empty($select)) {
            if ($select['confirm']) {
                $_SESSION = $select;
                header('Location: index.php');
            } else 
                echo "<script> alert('L\'adresse mail n\'est pas vérifier') </script>";
        } else
            echo "<script> alert('Le mot de passe ou le pseudo n\'est pas bon') </script>";
    }
    ?>

</body>
</html>