<?php
require_once('../inc/dbCat.php');

if (isset($_POST) && !empty($_POST)) {
    ###### Modifié les chat ########
    if (!empty($_POST['veto'])) {   
        # Je séléctionne les chats qui ont l'id qui ce trouve dans veto 
        $select = $bdd->prepare('SELECT * FROM cat WHERE id=?');
        $select->execute(array(
            $_POST['veto']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        # Je récupère la ligne qui à été séléctionné
        $update = $bdd->prepare('UPDATE cat SET veto=? WHERE id=?');
        $update->execute(array(
            !$select['veto'], # La colone que j'ai récupèré de la base de donnée je lui dit différent de elle même (0 devient 1, 1 devient 0)
            $_POST['veto']
        ));

    } elseif (!empty($_POST['transfer'])) {
        # Pareil que aux dessus juste ave transfer au lieu de veto
        $select = $bdd->prepare('SELECT * FROM cat WHERE id=?');
        $select->execute(array(
            $_POST['transfer']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);

        $update = $bdd->prepare('UPDATE cat SET transfer=? WHERE id=?');
        $update->execute(array(
            !$select['transfer'],
            $_POST['transfer']
        ));

    } elseif (!empty($_POST['delete'])) {
        # Ici je supprime la ligne de ma base de donnée en utilisant id du chat
        $delete = $bdd->prepare('DELETE FROM cat WHERE id=?');
        $delete->execute(array(
            $_POST['delete']
        ));

    }











    header('Location: ../paneladmin.php');
}
