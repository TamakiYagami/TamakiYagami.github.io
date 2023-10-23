<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>Images</title>
    <style>
        a[href='Vues/image.php'],a[href='image.php']  {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        include('../inc/nav.php');
    ?>
    <div class="Balise">
        <h2>La Balise &lt;img&gt; : L'image sur une page HTML</h2>
        <p>C'est avec l'attribut src que l'on indique le chemin vers le fichier voulu.</p>
        <h3>
            &lt;img class='fit-picture'<br><br>
                src="/media/example/grapefruit.jpg"<br><br>
                alt="Grapefruit"&gt;
        </h3>
    </div>
    <img src="../Public/Images/gars.png"  width="500px" alt="Image de street figther">
    <img src="../Public/Images/figth.png" width="500px" alt="Image figth de street figther">
    <img src="../Public/Images/fille.png" width="500ox" alt="Image de street figther">
</body>
</html>