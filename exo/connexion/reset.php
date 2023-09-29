<?php 
require_once('../../function/db.php');

if (isset($_GET) && !empty($_GET)) {
    $select = $bdd->prepare('SELECT * FROM users WHERE id=? AND token=?');
    $select->execute(array(
        $_GET['id'],
        $_GET['token']
    ));
    $select = $select->fetchAll();

    if (empty($select)) 
        header('Location: login.php');
    elseif ($select['confirm'] == 0) header('Location: login.php');
} else 
    header('Location: login.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Changement du mot de passe</title>
    <link rel="stylesheet" href="../../style/connexion.css">
</head>
<body>
    <form action="" method="post">
        <pre>
            <h1>Modification du mot de passe</h1>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm_password" required oninput="ChangeValue()">
            <br>
            <input type="submit" value="Modifier">
        </pre>
    </form>
    <?php 
        if (isset($_POST) && !empty($_POST)) {
            $update = $bdd->prepare('UPDATE users SET password=?, token=? WHERE id=? AND token=?');
            $update->execute(array(
                sha1($_POST['password']),
                '',
                $_GET['id'],
                $_GET['token']
            ));
            $update = $update->rowCount();
            if ($update > 0) 
                header('Location: login.php');
            else
                echo 'Une erreur c\'est produite ';
        }
    ?>
    <script>
        function ChangeValue() {
            let Password = document.getElementById('password')
            let confirmPassword = document.getElementById('confirm_password')
            
            if (Password.value == confirmPassword.value)                
                confirmPassword.setCustomValidity('')
            else                 
                confirmPassword.setCustomValidity('Les mots de passe doivent être identique')      
        }
    </script>
</body>
</html>