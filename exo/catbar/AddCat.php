<?php 
require_once('../../function/dbCat.php');

function Chatleatoire() {
    $chaine = '1234567890';
    return substr(str_shuffle(str_repeat($chaine, 15)), 0, 14);
}
function TestID($bdd) {    
    $id = Chatleatoire();
    $select = $bdd->prepare('SELECT * FROM cat WHERE id=?');
    $select->execute(array(
        (int)$id
    ));
    $select = $select->rowCount();
    if ($select > 0) {
        TestID($bdd);
    }
    return $id;
}
if (isset($_POST) && !empty($_POST)) {
    
    $insert = $bdd->prepare('INSERT INTO cat (id, prenom, color, photo, description, sexe) VALUES (?, ?, ?, ?, ?, ?)');
    $insert->execute(array(
        (int)TestID($bdd),
        $_POST['prenom'],
        $_POST['color'],
        $_POST['photo'],
        $_POST['desc'],
        $_POST['sexe']
    ));
    



















   header('Location: paneladmin.php'); 
}



















