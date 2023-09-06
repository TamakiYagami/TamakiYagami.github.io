// let et var permet de dire que je créer une 
// variable d'un nom souhaité
let Autruche = "Animal"
var Perche = "Poisson"
// J'ai défini des variable de type "string" 
// (Chaine de caractère)
let NombreStagiaire = 10
// J'ai défini une variable avec le nom NombreStagiaire
// Et je lui ai donner comme donnée le nombre 10
// J'ai défini une variable de type int (Nombre Entier)
var heure = 14.31
// J'ai créer une variable avec le nom heure 
// Je lui donner la donnée 14.31 
// J'ai défini une variable de type float/double
// (Nombre à virgule)
let Allumer = true
// J'ai créer une variable avec le nom Allumer
// Et comme valeur je lui donner true (Vrai)
// Le type de cette est Boolean (true/false)
var Ventilo = null
// J'ai créer une variable avec le nom Ventilo 
// Avec comme valeur null qui est rien du tout
// Le type est null 
let Phrase = "J'aime l' " + Autruche + 
" mais pas les " + Perche 
// J'aime l'Animal mais pas les Poisson
// J'ai concaténer les chaines de caractères 
// et les variables
var calcul = heure + NombreStagiaire // / * - % 
// 14.31 + 10 

console.log(Phrase)
console.log(calcul)
// Permet d'afficher une valeur donnée dans la console du navigateur

// Je créer une fonction qui se nomme horloge sans 
// paramètre 
var temps = 1
function horloge() {
    // Si temps est plus petit ou égale à 10 on éxécute l'addition
    // et le console.log sinon rien
    if (temps <= 10) { // <, >, <=, >=, ==, !=
        temps = temps + 1
        // temps++ // temps-- 
        // temps += 1 // temps -= 
        // J'additionne 1 à ma variable temps
        console.log(temps)
    } 
}

 // setInterval(horloge, 1000)


// Je voudrait avoir un compte à rebours qui commence à 50 
// et qui fini à 0 et qui descend toute les 2 secondes

var nombre = 50 

function montre() {
    if (nombre > 0) {
        console.log(nombre)
        nombre = nombre - 1   
        // nombre -= 1
        // nombre--
    }
} 

setInterval(montre, 2000)


