<?php 
require_once('db.php');
if (isset($_POST) && !empty($_POST)) { // $_GET
    echo '<pre>'; var_dump($_POST); echo '</pre>';
    echo $_POST['firstname'];

    // Sha1 Hash le mot c'est à dire 
    // Le compléxifi et le rend ilisible 
    // sha1 / md5
    echo sha1($_POST['password']) . "<br>";
    echo md5($_POST['password']);

    $insert = $bdd->prepare('INSERT INTO utilisateur(firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)');      
    $insert->execute(array(
        $_POST['firstname'], 
        $_POST['lastname'], 
        $_POST['email'], 
        md5($_POST['password']), 
        $_POST['gender']
    ));
    // $_GET['haninox']
    header('Location: ../index.php');
}      