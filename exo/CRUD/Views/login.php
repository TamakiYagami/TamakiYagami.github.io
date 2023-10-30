<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="../Controllers/login_ctrl.php" method="post">
        <pre>
            <h2>Connexion</h2>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name='pseudo'>
            
            <label for="password">Mot de passe :</label>
            <input type="password" name='password'>

            <input type="submit" value="Se connecter">
        </pre>
    </form>
</body>
</html>