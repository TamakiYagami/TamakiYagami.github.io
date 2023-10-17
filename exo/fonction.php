<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fonction</title>
</head>
<body>
    <?php
        # Créer une fonction en php qui s'appel MajourOuMinour qui a comme paramètre l'âge et 
        # qui doit retourner 'tou es minour' si l'âge est plus petit que 18 sinon ca retourne 'tou es majour'
        function MajourOuMinour($age) {
            return $age < 18 ? 'Tou es minour' : 'Tou es majour';
        } 
        echo MajourOuMinour(14) . '<br>';

        # Créer une fonction EN PHP qui s'appel RemplacerLesLettres avec un paramètre qui s'appel phrase
        # Exemple : Comment tou tou pelle => C0mment t0u t0u p3ll3 
        # Exemple : Bonjour les amis => B0nj0ur l3s am1s
        # Elle va devoir remplacer les o par des zero
        # Et remplacer les e par des trois 
        # Et aussi les i en 1 

        function RemplacerLesLettres($phrase) {
            $phrase = str_replace('o', '0', $phrase);
            $phrase = str_replace('e', '3', $phrase);
            $phrase = str_replace('i', '1', $phrase);
            return $phrase;
            // return str_replace('o', '0', str_replace('e', '3', str_replace('i', '1', $phrase)));
        }

        echo RemplacerLesLettres('Comment tou tou pelle') . '<br>';
        echo RemplacerLesLettres('Je s\'appel groot') . '<br>';
        echo RemplacerLesLettres('Bonjour robert') . '<br>';


        # Créer une fonction  en PHP qui se nomme DernierElementTableau elle aura comme paramètre un tableau 
        # Et si le tableau n'est pas vide elle devra retourner la dernière valeur du tableau sinon
        # Retourne null

        function DernierElementTableau($tab) {
            if (!empty($tab)) {
                # La fonction end sert à récupèrer la dernière valeur d'un tableau 
                return end($tab);
                // return $tab[count($tab)-1];
            }
            return null;
            # La condition return est une condition de PHP qui envoie l'élément
            # Que on lui donne à l'endroit ou on à appelé la fonction 
            # Il stop aussi la fonction
        }

        #               0                   1   2           3             4
        $tab = ["J'ai dit 10 tes mort !", 10, 47.6579, 'cléopatre', 'autruche' ];

        echo DernierElementTableau($tab) . '<br>';

        # Créer une fonction en PHP !! qui se nomme PremierElementTableau Elle aura comem paramètre un
        # Tableau si le tableau est vide elle envoie null sinon elle envoie le premier element du tableau
    
        function PremierElementTableau($tab) {
            if (!empty($tab)) {
                return $tab[0];
                # return $tab[count($tab) - count($tab)];
            }
            return null;
            # La condition return est une condition de PHP qui envoie l'élément
            # Que on lui donne à l'endroit ou on à appelé la fonction 
            # Il stop aussi la fonction
        }
        echo PremierElementTableau($tab) . '<br>';


        # Créer une fonction en PHP qui se nomme Capital et qui va avoir comme paramètre pays qui va 
        # être en string et la fonction doit envoie la capital du pays 
        # Il faudra utiliser un switch

        # France = Paris
        # Allemagne = Berlin
        # Italie = Rome
        # Maroc = Rabat
        # Portugal = Lisbonne
        # Angleterre = London
        # Tout autre pays = Inconnu

        function Capital($pays){
            switch ($pays) {
                case 'France':
                    return 'Paris';
                case 'Allemagne';
                    return 'Berlin';
                case 'Italie':
                    return 'Rome';
                case 'Maroc';
                    return 'Rabat';
                case 'Portugal':
                    return 'Lisbonne';
                case 'Angleterre';
                    return 'London';
                default:
                    return 'Inconnu';
            }
        }

        echo Capital('Portugal') . '<br>';

        # Créer une fonction qui ce nomme VerifyPassword qui prendra comme paramètre password de type string
        # Et elle devra envoie un type booléan qui vaut true si 
        # Avoir au moins de 8 caractères
        # Avoir au moins 1 chiffre
        # Avoir au moins une majucule et une minucule
        # Sinon ca envoie faux

        function VerifyPassword($password) {
            # strlen recupère la longeur d'une string
            if (strlen($password) < 8) {
                return false;
            }
            # preg_match est une fonction de PHP qui permet de vérifier dans une chaine de caractère 
            # Si l'argument que on lui donne s'y trouve 
            if (!preg_match('/[0-9]/', $password)) {
                return false;
            }
            if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
                return false;
            }
            return true;
        }

        echo (VerifyPassword('Hello World 1') ? 'Je suis valide' : 'Je suis tout sauf valide') . '<br>';

        # Créer une fonction Factorielle qui a comme paramètre un nombre entier cette fonction devra afficher le 
        # le factorielle d'un nombre 
        # (Il est conseillé d'utiliser une boucle)
        # N = (n * n-1) + (n* n-2) + ....

        function Factorio($nombre) {
            if ($nombre < 0) return 'Ta gueule btrd';
            $temporaire = 1;
            for ($i = $nombre; $i > 0 ; $i--) { 
                $temporaire *= $i; 
                echo ($i == $nombre ? '' : ' * ') . $i;
                // $temporaire = $temporaire * $i;
                # += Equivaut a dire que j'additiionne la variable plus ce que je lui donne juste après
            }
            return ' = ' . $temporaire;
        }
        # Afficher les calculs 

        echo Factorio(10) . '<br>';


        # Créer une fonction qui s'appel LigneTriangle qui prend un paramètre qui va être un nombre 
        # avec ce nombre formé un trianglé de ce style : 
        # 1
        # 22
        # 333
        # 4444
        # 55555
        # 777777

        function LigneTriangle($nombre) {
            for ($i=1; $i <= $nombre; $i++) { 
                for ($j=0; $j < $i ; $j++) { 
                    echo $i;
                }
                echo '<br>';
            }
        }
        LigneTriangle(7);

        # Créer une fonction qui ce nomme InverseString qui prend un paramètre phrase et qui va inserser
        # une chaine de caractère
        # Bonjour tout le monde => ednom el tuot ruojnob

        $tab = [#    0    1    2     3    4    5    6
                    'b', 'o', 'n' , 'j', 'o', 'u', 'r'
        ];

        function InverseString($phrase) {
            $temporaire = "";
            # On a vu que les chaine de caractère pouvais être vu comme un tableau 
            # Et donc je séléctionne les éléments comme un tableau et je les concatène dans une variable
            # temporaire
            for ($acordeon=strlen($phrase)-1; $acordeon >= 0; $acordeon--) { 
                $temporaire = $temporaire . $phrase[$acordeon];
            }
            return $temporaire;
        };

        echo InverseString('Bonjour tout le monde') . "<br>";
        echo InverseString('Je s\'appel groot') . "<br>";

        # Créer une fonction qui ce nomme Acronyme qui a comme paramètre une chaine de caractère 
        # Et qui envoie que les initial des mot de la phrase

        function Acronyme($phrase) {
            $resultat = "";
            $tab_phrase = explode(" ", $phrase);

            foreach($tab_phrase as $mot) {
                $resultat = $resultat . strtoupper($mot[0]); 
            }

            return $resultat;
        }

        echo Acronyme("Jeudi une langue interviens entre notre epave sortie toute petite dorénavant");

        # Créer une fonction AffichageTableau qui prend en paramètre un tableau et qui va devoir afficher un
        # tableau en html sur notre page

        $tab = [
            'mdupond' => [
                'prenom' => 'Martin',
                'nom' => 'Dupond',
                'age' => 25,
                'ville' => 'Paris'
            ],
            "mmatin" => [
                'prenom' => 'Toto',
                'nom' => 'Matin',
                'age' => 34,
                'ville' => 'Auchwitz'
            ]
        ];


        function AffichageTableau($tableau) {
            if (!is_array($tableau) || empty($tableau)) {
                return;
            }
            echo "<table>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Ville</th>
                </tr>";
            foreach($tableau as $index => $ligne) {
                $prenom = $ligne['prenom'];
                $nom = $ligne['nom'];
                $age = $ligne['age'];
                $ville = $ligne['ville'];
                echo "<tr id=$index> 
                    <td>$prenom</td>
                    <td>$nom</td>
                    <td>$age</td>
                    <td>$ville</td>
                </tr>";
            }
            echo "</table>";
        }

        AffichageTableau($tab);
    ?>

</body>
</html>