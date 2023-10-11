<?php 
session_start();
    require_once('../../function/dbCat.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Accueil</title>
</head>
<body>
    <?php 
        $_GET['page'] = 'index';
        include 'inc/header.php'; ?>
    <br><br><br><br><br>
    <div>
        <p>Bienvenue petit chaventurier</p>
    </div>

    <?php if(!empty($_SESSION)) : ?>
        <!-- Je créer un if global qui ce permet de passer en html pour
        executer ou non les lignes qui trouve entre les balise if et endif -->

        <div>
            <form method="post">
                <h2>Faire une réservation (15 min)</h2>
                <label for="cat">Chat :</label>
                <select name="cat" id="catSelect" required>
                    <?php
                        $selectCat = $bdd->prepare('SELECT * FROM cat WHERE veto=0 AND transfer=0'); 
                        // Je séléctionne toute les colonnes et les lignes qui on la colonne veto et transfer à 0
                        $selectCat->execute();
                        $selectCat = $selectCat->fetchAll();
                        if (!empty($selectCat)) { // Je vérifie que j'ai des lignes qui ont était récuperer
                            $selectRes = $bdd->prepare('SELECT * FROM reservation');
                            $selectRes->execute();
                            $selectRes = $selectRes->fetchAll();

                            
                            // for ($i=0; $i < count($select); $i++) { // Je fait une boucle qui tourne le nombre de ligne récupérer
                            //     echo "<option value='" . $select[$i]['id'] . "'>" . $select[$i]['prenom'] . "</option>";
                            // }
                        }
                    ?>
                </select>
                <label for="table">N° Table :</label>
                <select name="table" id="table" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="date">Date :</label>
                <input type="datetime-local" name="date" id="date" oninput="ChangeDate()"  
                    value="<?php echo date('Y-n-d'); ?>T<?php echo date('H')+2; ?>:00" 
                    min="<?php echo date('Y-n-d'); ?>T08:00" 
                    step="900"
                    max="<?php echo date('Y-n')?>-<?php echo date('d')+7?>T18:59"
                required>                     
                <!-- Ici je récupère la date d'aujourd'hui pour pouvoir définir value, min, max -->
                <script>
                    function ChangeDate() {
                        let Element = document.getElementById('date')
                        // Split est une fonction de JavaScript qui permet de découper une chaine de caractère
                        // Au caractère que on lui donne et il va enfaite nous créer un tableau
                        let temporaire = Element.value.split('T')
                        // parseInt est une fonction de JavaScript qui permet de convertir tout type de variable
                        // en entier 
                        if (parseInt(temporaire[1]) > 19) {
                            Element.setCustomValidity('A cette heure on est fermé')
                        } else {
                            Element.setCustomValidity('')
                        }
                        let theo = [
                            '00',
                            '15',
                            '30',
                            '45'
                        ]
                        // let heure  = temporaire[1].split(':')[0]
                        let minute = temporaire[1].split(':')[1]
                        // let date = new Date(); // new Date est défini par JavaScript est récupère toute
                        // // les informations du moment et d'aujourd'hui

                        theo.forEach(function(lavabo) {
                            if (minute === lavabo) {
                                
                            }
                        })


                        
                
                    }
                </script>
                <label for="comment">Commentaire :</label>
                <textarea name="comment" id="comment" cols="30" rows="5" maxlength='255'></textarea>
                <input type="submit" value="Faire ma réservation">
            </form>
        </div>

        <?php 
        if (isset($_POST) && !empty($_POST)) {
            // J'insert dans la base de donnée les inforamtions que je lui est donnée dans le formulaire
            $insert = $bdd->prepare('INSERT INTO reservation(id_client, id_cat, date, comment, tab) VALUES (?, ?, ?, ?, ?)');
            $insert->execute(array(
                // Le (int) va passer la variable temporairement en entier 
                (int)$_SESSION['id'],
                (int)$_POST['cat'],
                str_replace('T', ' ', $_POST['date']),
                $_POST['comment'],
                (int)$_POST['table']
            ));
 
            header('Location: index.php');
        }
        ?>
    <?php endif; ?>


<br><br><br>

    <?php include 'inc/footer.php'; ?>
</body>
</html>



