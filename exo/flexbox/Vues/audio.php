<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>Audio</title>
    <style>
        a[href='Vues/audio.php'],a[href='audio.php']  {
            color: red;
        }
        
    </style>
</head>
<body>
    <?php
    include('../inc/nav.php')
    ?>
    <div class="Balise">
        <h2>La Balise <\audio>: Le son sur une page HTML</h2>
        <p>C'est avec l'attribut src que l'on indique le chemin vers le fichier voulu.</p>
        <h3>
            &lt;audio controls&gt;<br><br>
            &lt;source src="monAudio.mp3" type="audio/mpeg"&gt;<br>
            &lt;source src="monAudio.ogg" type="audio/ogg"&gt;<br>
            &lt;p><br>Votre navigateur ne prend pas en charge l'audio HTML
                    Voici un &lt;a href='monAudio.mp3'&gt;lien verse le audio&lt;/a&gt;<br>
                &lt;/p&gt;<br><br>
            &lt;/audio&gt;<br>
        </h3>
    </div>
    <audio controls>
        <source src="../Public/Audios/music.mp3" type="audio/mpeg">
    </audio>
</body>
</html>