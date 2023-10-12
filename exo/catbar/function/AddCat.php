<?php 
require_once('../inc/dbCat.php');

function Chatleatoire() {
    $chaine = '1234567890';
    return substr(str_shuffle(str_repeat($chaine, 15)), 0, 14);
}
################## Fonction TestID #################

# Cette fonction TestID que j'ai créer contient un paramètre que j'ai nommée $base 
# qui sert a récupèrer la variable de la base de donnée 
# Dans cette fonction j'appel une autre fonction qui s'appel Chatleatoire pour fournir un (token) aléatoire
# Et je vérifie dans la base de donnée si le token générer est déjà dans la base donnée si c'est le cas 
# La fonction ce répète sinon si il y est pas la fonction ce termine en nous redonnant le token générer à la fin

function TestID($base) {    
    $id = Chatleatoire();
    $select = $base->prepare('SELECT * FROM cat WHERE id=?');
    $select->execute(array(
        (int)$id
    ));
    $select = $select->rowCount();
    if ($select > 0) {
        TestID($base);
    }
    return $id;
}

#####################################################

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

   header('Location: ../paneladmin.php'); 
}



















