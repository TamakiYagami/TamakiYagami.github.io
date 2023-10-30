<?php
    require_once('../inc/db.php');
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM user WHERE id=?');
        $select->execute(array(
            $_POST['modify']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);  

        if ($_POST['password'] == $select['mot_de_passe']) {
            $pass = $select['mot_de_passe'];
        } else {
            $pass = password_hash($_POST['password'], PASSWORD_ARGON2I);
        }

        $update = $bdd->prepare('UPDATE user SET pseudo=?, mot_de_passe=?, description=? WHERE id=?');
        $update->execute(array(
            $_POST['pseudo'],
            $pass,
            $_POST['description'],
            $_POST['modify']
        ));
        header('Location: ../index.php');
    } 
?>