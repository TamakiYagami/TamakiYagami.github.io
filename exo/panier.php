<?php
    require_once('../function/db.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transfert de fruits</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 40px;
                text-align: center;
            }
            select {
                padding: 10px;
                margin: 20px;
                width: 200px;
                height: 100px;
            }
            button {
                padding: 10px 20px;
                margin: 20px;
                cursor: pointer;
            }
            .description {
                font-weight: bold;
                margin-bottom: 20px;
            }


        </style>
    </head>
    <body>
        <form method='post'>
            <div class="description">Sélectionnez un fruit de la liste A pour l'ajouter à la liste B (votre panier).</div>

            <select id="listeA" multiple>
                <option value="ananas">Ananas</option>
                <option value="banane">Banane</option>
                <option value="citron">Citron</option>
                <option value="fraise">Fraise</option>
                <option value="orange">Orange</option>
                <option value="pomme">Pomme</option>
                <option value="raisin">Raisin</option>
                <option value="tomate">Tomate</option>
                <option value="kiwi">Kiwi</option>
                <option value="figue">Figue</option>
                <option value="pasteque">Pastèque</option>
                <option value="nefle">Nèfle</option>
                <option value="mangue">Mangue</option>
                <option value="cerise">Cerise</option>
                <option value="framboise">Framboise</option>
                <option value="coco">Noix-de-coco</option>
                <option value="peche">Pêche</option>
                <option value="mirabelle">Mirabelle</option>
                <option value="groseille">Groseille</option>
            </select>

            <input type="number" name="quantite" id="quantite">
            <button id="ajouter" disabled>Ajouter au panier</button>

            <br>

            <div class="description">Sélectionnez un fruit de la liste B (votre panier) pour le retirer.</div>

            <!-- Donc ici j'ai mis le name en mode listB[] puisque on a plusieurs élément dans le select et on veux tous les récupèrer mais si on veux tous 
            les récupérer il faut que on est un tableau -->
            <select id="listeB" name='listB[]' multiple></select>

            <button id="supprimer" disabled>Retirer du panier</button>
            <br>

            <button id="buy" disabled>Acheter !</button>

        </form>
        <?php
            if(isset($_POST) && !empty($_POST)){
                $insert = $bdd->prepare('INSERT INTO achat (fruit) VALUES (?)');
                # ['ananas', 'mirabelle', 'peche'] pour un tableau indéxés
                # ['ananas': 10, 'mirabelle': 2, 'peche': 1] pour une tableau Associatif
                $fruit;
                foreach($_POST['listB'] as $option ) {
                    $fruit[$option] = $_POST['quantite'];
                }

                $insert->execute(array(
                    # json_encode permet de modifier un tableau en string mais qui à l'apparence d'un tableau 
                    json_encode($fruit)
                ));
            }
        ?>

        <script>
        $(document).ready(function() {
            // Activer/Désactiver le bouton 'Ajouter' en fonction de la sélection dans la liste A
            $('#listeA').change(function() {
                $('#ajouter').prop('disabled', !$(this).val());
            });

            // Activer/Désactiver le bouton 'Supprimer' en fonction de la sélection dans la liste B
            $('#listeB').change(function() {
                $('#buy').prop('disabled', !$(this).val());
                $('#supprimer').prop('disabled', !$(this).val());
            });

            // Lorsque le bouton 'Ajouter' est cliqué
            $('#ajouter').click(function() {
                let selectedOption = $('#listeA option:selected');

                $('#listeB').append(selectedOption);

                // Prop est une fonction de Jquery qui permet de rajouter un paramètre a l'élément HTML dans notre cas 
                // disabled est un paramètre que on utiliser pour désactiver un élément

                $('#buy').prop('disabled', false);

                $('#supprimer').prop('disabled', false);
                $('#ajouter').prop('disabled', true); // Désactiver le bouton après le transfert
            });

            // Lorsque le bouton 'Supprimer' est cliqué
            $('#supprimer').click(function() {
                let selectedOption = $('#listeB option:selected');

                $('#listeA').append(selectedOption);

                $('#supprimer').prop('disabled', true); // Désactiver le bouton après le transfert

                $('#buy').prop('disabled', true);
            });

        });
        </script>

    </body>
</html>
