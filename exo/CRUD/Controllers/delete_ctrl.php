<?php
    require_once('../inc/db.php');
    if (isset($_POST) && !empty($_POST)) {
        $delete = $bdd->prepare('DELETE FROM user WHERE id=?');
        $delete->execute(array(
            $_POST['delete']
        ));
        header('Location: ../index.php');
    }
?>