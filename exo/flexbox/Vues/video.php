<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>Vidéo</title>
    <style>
        a[href='Vues/video.php'],a[href='video.php']  {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        include('../inc/nav.php')
    ?>
    <div class="Balise">
        <h2>La Balise &lt;video&gt;: La vidéo sur une page HTML</h2>
        <p>C'est avec l'attribut src que l'on indique le chemin vers le fichier voulu.</p>

        <h3>
            &lt;video controls width="250"&gt;<br><br>
                &lt;source src="/media§examples/flower.webm"
                    type="video/webm"&gt;<br><br>
                &lt;source src="/media/examples/flower.mp4"
                    type="video/mp4"&gt;<br><br>
            Votre navigateur ne prend pas en charge le système de Vidéo <br><br>
            &lt;/video&gt;
        </h3>
    </div>
    <video controls width="550px">
        <source src="../Public/Vidéos/video.mp4" type="video/mp4">
    </video>
    
</body>
</html>