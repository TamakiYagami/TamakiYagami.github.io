<?php
    if (isset($_POST) && !empty($_POST)) {
        require_once('../inc/db.php');
        $user = $bdd->prepare('SELECT * FROM user WHERE pseudo=?');
        $user->execute(array(
            $_POST['pseudo']
        ));
        $user = $user->fetch();
        
        if (password_verify($_POST['password'], $user['mot_de_passe'])){
            session_start();
            $_SESSION = $user;
            header('Location: ../Views/userpage.php');
        } else {
            echo '<script> alert("Mauvais mot de passe") </script>';
        }
    }
?>