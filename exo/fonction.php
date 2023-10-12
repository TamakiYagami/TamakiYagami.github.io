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
        echo MajourOuMinour(14);

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

        echo RemplacerLesLettres('Comment tou tou pelle');

    ?>
</body>
</html>