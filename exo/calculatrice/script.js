 
$(document).ready(function() {
    // La fonction click de Jquery ajoute enfaite toute seul le onclick au élément séléctionner
    $('.number').click(function(data) {

        // data contient généralement une partie ciblé du DOM plus l'événement qui est appelé dans notre ici l'événement appelé est le click 
        // Donc comme je veux récupérer sur quel bouton j'ai appuyé je vais chercher dans data le target, le target est toujours l'élément qui été toucher pour 
        // Effectué une action
        // Et donc dans target j'ai les informations compléte de mon bouton donc je choisi son innerHTML c'est à dire le texte en blanc que j'ai mis au dessus dans
        // Chaque bouton


        let number = data.target.innerHTML
        // let number = this.innerHTML
        // this est un constructeur qui récupère le bouton qui est séléctionner et rien d'autre



        $('#input').val( $('#input').val() + number )

        // document.getElementById('input').value += number
        // document.getElementById('input').value = document.getElementById('input').value + number

        // En JavaScript le + dans ce cas la est une concaténation
        // Le + n'est pas tout le temps de la concaténation en JS 
        // Il peut aussi être une opération on peu les différentier en regardant le type des variables qui ce trouve entre le +
        // Si au moins une des deux variable est un type string c'est une concaténation
    })



    $('.clear').click(function() {
        $('#input').val('')
    })



    $('.egal').click(function() {
        // Je séléctionne l'élément qui a l'id input et je change ca valeur avec Jquery en lui disant qu'elle sera egal à eval de ca propre valeur
        // Eval est une fonction de JS qui permet de soit évalué le code ou effecuté une opération
        $('#input').val( eval( $('#input').val() ) )
    })
})

