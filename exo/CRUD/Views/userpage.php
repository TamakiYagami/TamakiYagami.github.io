<?php
session_start();    
if (empty($_SESSION)) {
    header("Location: read.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page Utilisateur</title>
</head>
<body>
    <h1>Bienvenue sur la page utilisateur !</h1>

    <form>
        <button formaction="../Controllers/logout_ctrl.php">Déconnexion</button>
    </form>
    
    
</body>
</html>