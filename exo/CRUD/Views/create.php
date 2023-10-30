<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer</title>
</head>
<body>
    <form action="../Controllers/create_ctrl.php" method="post">
        <pre>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo">

            <label for="password">Mot De Passe :</label>
            <input type="password" name="password">
            
            <label for="description">Description :</label>
            <textarea name="description" id="desc" cols="30" rows="10">Inscrivez votre description</textarea>
            
            <input type="submit" value="Créer">
        </pre>
    </form>
    
</body>
</html>