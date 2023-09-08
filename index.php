<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cours PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
    echo "<p class='test'>Bonjour</p>";
    // J'affiche Bonjour sur ma page dans une balise p avec comme
    // classe test
    echo "<p>" . "Bonjour" . "</p>";
    $cookie = 10; // integer
    // $ = var/let
    // Je défini ma variable avec $ puis 
    // je lui donne le nom cookie
    // et je lui rentre la valeur 10
    $phrase = "Je suis une phrase"; // string
    $nombre = 1.4; // float 
    $choix = true; // Booléens
    /*
    Integer => Nombre Entier comme 50, 47, 874698
    Float => Nombre à virgule comme 74.58, 4.202848431, 1.0004
    String => Chaine de caractères comme
        "Bonjour"
        "Je code sur ordinateur"
    Booléens => true(vrai) ou false (faux)
    Array =>
        Indexés
        Associatif
    Null => NULL
    */
    $titre = '<br>Je suis un titre';
    echo $phrase;
    echo $titre;
    ?>
    <br>
    <?php

    // Les conditions

    $condition = false;

    if ($condition) {
        echo "<br>Je passe ici donc c'est vrai";
    } else {
        echo "<br>Je passe par la donc c'est faux";
    }

    $code = 4227;
    // == Ca prend en compte que la variable sois égale 
    // === Ca prend en compte que la variable sois égale
    // et du même type
    if ($code === 4227) {
        echo "<p>Le code est correct</p>";
    } else {
        echo "<p>Le code n'est pas correct</p>";
    }

    $couleur = "gris";
    echo "<p>J'ai une autruche de couleur ". $couleur ."</p>";
    
    if ($couleur == "rouge") { // Si
        echo "<p>J'ai une autruche de couleur rouge</p>";
    } else if ($couleur == "bleu") { // Sinon Si
        echo "<p>J'ai une autruche de couleur bleu</p>";
    } else { // Sinon
        echo "<p>J'ai pas d'autruche</p>";
    }

    // Ecriture Ternaire

    $a = 15;
    $un = $a > 11 ? 1 : 0;
    // Si $a supérieur à 11 alors $un est égale à 1 sinon il 
    // Sera égale à 0

    // Les Switch 

    $tailles = 187;

    switch ($tailles) {
        case 120:
            echo "<p>Tu es atteint de nanisme.</p>";
            break;
        case 150:
            echo "<p>Tu es très petit(e)</p>";
            break;
        case 170:
            echo "<p>Tu a ine convenable</p>";
            break;
        case 200:
            echo "<p>Bonjour Monsieur !</p>";
            break;
        default:
            echo "Tu n'existe pas !!";
            break;
    }

    // Les Tableaux 
    $tableau = [
        42, // 0
        78, // 1
        48, // 2
        1486658,  // 3
        "Une Autruche" // 4
    ];
    echo $tableau[4] . "<br>";

    echo '<pre>';
    var_dump($tableau);
    echo '</pre>';
    
    $exo = [4, 12, 78, 98, 65];
    $resultat = $exo[2] -  ($exo[0] * $exo[1]);
    $resultat = ($exo[3] - $exo[4]) - ($exo[1] / $exo[0]);
    echo $resultat;
    // 78 - (4 * 12)
    // (98 - 65) - (12 / 4)
    // La valeur de $resultat doit être égal à 30 en utilisant
    // que les nombre qu'il ce trouve dans le tableau exo

    // Tableaux Associatifs
 
    $tab_assoc = [
        "voiture" => "volkswagen", // Type string
        "animal" => "Perroquet", // Type string
        "chiffre" => 10, // Type Integer
        "calvitie" => true, // Type Boolean
        "legumes" => null  // Type Null
    ];
    // J'ai fait un tableau avec 5 valeurs qui ont une index 
    // Que j'ai défini moi même 
    // Voiture est une index et volkswagen est sa valeur
    // Animal est une index et Perroquet est sa valeur
    // Ainsi de suite
    $tab_assoc['bras'] = false;
    // J'ai défini un nouvelle index bras avec comme valeur faux

    echo "<pre>"; var_dump($tab_assoc); echo "</pre>";

    // Les boucles

    // La boucle while

    $o = 0;
    while (true) {
        $o++;
        echo "<p>Je passe dans la boucle while</p> "; 
        if ($o == 10) {
            break;
            // Sert à casser la boucle pour pouvoir l'arrêter
        }
    }

    // La boucle do-while

    do {
        echo 'Je passe dans la boucle do-while';
    } while (false);

    // La boucle for

    for ($i=0; $i < 10; $i++) { 
        echo "<br>Je suis passer " . $i+1 . " fois dans la boucle for";
    }

        /* 
            Créer un tableau Associatif en mettant une 
            index bras de type booléen et une index 
            jambe qui va être un integer
        */

        /* 
        Si il n'a pas de jambe ni de bras
            Tu es un e-tronc !
        Sinon si il n'a pas de bras
            Pas de bras pas de chocolat
        Sinon
            Tu es basique donc tu es nul
        */

        $tab_exo = [
            "bras" => true,
            "jambe" => 2
        ];
        // Le point d'explamation (!) vaut dire différent de
        // Exemple : Si bras est égale à vrai et 
        // que je fait différent de il sera égale a faux
        if ($tab_exo['jambe'] == 0 && !$tab_exo['bras'])
            echo "<p>Tu es un e-tronc !</p>";
        else if (!$tab_exo['bras'])
            echo "<p>Pas de bras pas de chocolat</p>";
        else 
            echo "<p>Tu es basique donc tu es nul</p>";
    ?>
    
</body>
</html>