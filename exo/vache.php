<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="../scripts/jquery-3.7.1.min.js"></script>
    <title>Document</title>
    <style>
        span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>La vache <span class="color">Bleue</span> par Gelett Burgess</h1>
    <p> Je n'ai jamais vu une cache <span class="color">Bleue</span>, Je n'espère jamais voir un ; Mais je peuxs vous dire, de toute façon, Je verrau plutôt qu'être un !</p>
    <label for="color">Changer la couileur de la vache :</label>
    <input type="text"id="color">
    <button id="change">Changer !</button>
    
    <script>
        $('#change').click(function() {
            let couleur = $('#color').val()
            $('.color').text(couleur)
        })
    </script>
</body>
</html>