<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="./scripts/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="scss/main.css">
    <title>Index OF</title>
</head>
<body theme="jour">
    <ul>
        <h2>Cours</h2>
        <li><a href="Cours.html">Cours HTML</a></li>
        <li><a href="cours_html.html">Cours HTML 2</a></li>
        <li><a href="index.php">Cours PHP</a></li>
        <h2>Exo</h2>
        <li><a href="exo/flexbox.php">Exo FlexBox</a></li>
        <li><a href="exo/tableauJO.php">Exo Tableau JO</a></li>
        <li><a href="exo/clock.php">Exo Minuteur</a></li>
        <li><a href="exo/carte.php">Exo Carte Postal</a></li>
        <li><a href="exo/atm.php">Exo ATM</a></li>
    </ul>

    <div class="text"></div>

    <div class="centre">
        <span>Spin</span>
        <div class="fleche"></div>
    </div>

    <div class="circle">
        <?php
            for ($i=1; $i <= 36; $i++) { 
                echo "<div class='box-$i'><div class='choix' id='b-$i'> <span>$i</span> </div></div>";
            }
        ?>
    </div>
    <script>
        $('.centre').click(function() {
            $('.circle').css('rotate', Math.random() * 360 + 'deg')
        })
        
    </script>
    <!-- 
        blanc       => Texte entre balise qui est forcément affiché sur la page
        bleu foncé  => Constructeur (construit tout ce que leur demande)
        bleu clair  => Variable qui contiennent des valeurs
        Orange      => Chaine de caractère qui sont tout le temps entre guillemet ("") ou ('') ou (``)
        Jaune       => Fonction qu'on créer ou non (Si on ne les a pas créer quand on passe dessus
                       il nous indique plusieurs information)
        Vert        => Cette un commentaire comme celui ci
        Vert Clair  => Les types ( string, int, float, double, boolean, null, array = [] )
        Violet      => Conditions (if, else, elseif, endif, for, while, dowhile, switch, 
                                   include, require, return, continue, break)

        ()          => J'intègre des paramètres à une fonction à l'interieur des paranthèses avec variable
        {}          => Je rentre dans l'element entre les accolade
        []          => Je défini le tableau entre les crochet
        ""/''/``    => Je défini une chaine de caractère
        =           => Je modifie la valeur d'une variable
        ==          => Je vérifie si la valeur d'un variable et égal un autre valeur
        ===         => Je vérifie si une variable et égal à une autre
        =< =>       => Je vérifie si c'est egal ou supérieur ou inférieur
        &&          => et puis
        ||          => Ou 
        != !        => Different de
        -=          => Variable1 = Variable1 - Variable2
        +=          => Variable1 = Variable1 + Variable2
        *=          => Variable1 = Variable1 * Variable2
        /=          => Variable1 = Variable1 / Variable2
        .=          => Concaténation String = String . String
                        La concaténation est le terme pour dire que je rajoute une chaine de caractère à la fin de la
                        chaine de caractère juste avant 
                        "BOI" . "T"     = BOIT
                        "BOI" .  " T"   = BOI T
                        "BOI" . 1       = BOI1
                        "BOI ". 1       = BOI 1
                        "BOI" . 1 . "T" = BOI1T
    -->
</body>
</html>