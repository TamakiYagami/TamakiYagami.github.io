<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Carte Postale</title>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../style/carte.css">
</head>
<body>
    <div class="carte">
        <div class="texte">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, porro quisquam? Ex, deserunt vitae veritatis quae dolorem nisi, cumque alias quam et beatae natus, iusto asperiores molestiae esse molestias inventore?</p>
        </div>
        <div class="timbre">
            <img src="../img/timbre.png" alt="Timbre">
        </div>
        <img src="../img/tampon.png" alt="Tampon">
        <p class="tampon">
            <!-- <script>
                var date = new Date; 
                document.write(`${date.getDate()}`, `/`, `${date.getMonth()}`, '/', `${date.getFullYear()}` )
            </script> -->
            <?php echo date('d/m/y'); ?>
        </p>
        <img src="../img/obliteration.png" alt="Obliteration">
        <div class="separateur"></div>
        <div class="information">
            <p>Jean Philipe Smet</p>
            <p>Cimitière de Lorient</p>            
            <p>Saint Barthélemy</p>
            <p>France</p>
        </div>
        <div class="copyright">&copy; | La carte Parisienne Tel : <a href="#">03.82.47.10.53</a></div>
    </div>
</body>
</html>