<?php
    require_once('../../function/db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        form {
            margin: 0 auto 0 auto;
            display: flex;
            justify-content: center;
        }

        form * {
            margin: 15px ;
        }

        
    </style>
</head>
<body>
    <!-- Créer un formulaire en php qui resemble à celui ci : 
    https://cdn.discordapp.com/attachments/550289332812906504/1163773698625511424/image.png?ex=6540cbb7&is=652e56b7&hm=aa9c41f65f2692145768cac347b0c78eeb43e691f311679e1ab7d64bddde95a8&
    -->
    <!-- Il devra être fonctionnel et être incrémenter dans une base donnée
    dans une table qui s'appelle annuaire qui resembler à ceci :

    - id_annuaire (INT, 3, AI)
    - nom (VARCHAR, 30)
    - prenom (VARCHAR, 30)
    - telephone (INT, 10)
    - profession (VARCHAR, 30)
    - ville (VARCHAR, 30)
    - codepostal (INT, 5)
    - adresse (VARCHAR, 30)
    - date_de_naissance (DATE)
    - sexe (ENUM, 'm','f')
    - description (TEXT)

-->
<form action="" method="post">
    <fieldset>
        <legend>Informations</legend>
        <pre>
            <label for="nom">Nom *</label>
            <input type="text" name="nom" id="nom" maxlength="30" required>
            <label for="prenom">Prénom *</label>
            <input type="text" name="prenom" id="prenom" maxlength="30" required>
            <label for="prenom">Telephone *</label>
            <input type="tel" name="tel" id="tel" minlength="10" maxlength="10" required>
            <label for="nom">Profession</label>
            <input type="text" name="profession" id="profession" maxlength="30">
            <label for="nom">Ville</label>
            <input type="text" name="ville" id="ville" maxlength="30">
            <label for="postale">Code Postal</label>
            <input type="tel" name="postale" id="postale" minlength="5" maxlength="5" pattern="[0-9]{5}">
            <label for="adresse">Adresse</label>
            <textarea name="adresse" id="adresse" cols="30" rows="2" maxlength="30"></textarea>
            <label for="nom">Date de Naissance</label>
            <input type="date" name="date" id="date">
            <label for="sexe">Sexe</label>
            <label for="homme">Homme: </label> <input type="radio" name="sexe" id="homme" value="m" required>  <label for="femme">Femme: </label><input type="radio" name="sexe" id="femme" value="f" required>
            <label for="description">Description</label>
            <textarea name="desc" id="desc" cols="30" rows="5"></textarea>
            <input type="submit" value="Enregistrement">
        </pre>
    </fieldset>
</form>
<?php
    if (isset($_POST) && !empty($_POST)) {
        $insert = $bdd->prepare('INSERT INTO annuaire (nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insert->execute(array(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['tel'],
            strlen($_POST['profession']) <= 0 ? NULL : $_POST['profession'],
            strlen($_POST['ville']) <= 0 ? NULL : $_POST['ville'] ,
            strlen($_POST['postale']) <= 0 ? NULL : $_POST['postale'],
            strlen($_POST['adresse']) <= 0 ? NULL : $_POST['adresse'],
            strlen($_POST['date']) <= 0 ? NULL : $_POST['date'],
            $_POST['sexe'],
            strlen($_POST['desc']) <= 0 ? NULL : $_POST['desc']
        ));
    }
?>
</body>
</html>