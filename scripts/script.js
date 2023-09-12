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

// setInterval(montre, 2000)

// Array = Tableau 
// C'est un tableau indéxer
// Type de variable qui est elle même un tableau
//          0      1       2    3
var tab = [
    10, // 0
    "bonjour",  // 1
    7.5,  // 2
    null // 3
]
// Cette variable est tableau qui contient 4 valeurs dans l'ordre 
// 10
// "bonjour"
// 7.5
// null
console.log(tab[1]) 
// On affiche la valeur qui ce trouve à la position 1 qui est "bonjour"
console.log(tab[3])
// On affiche la valeur qui ce trouve à la position 3 qui est null

// Je voudrait un tableau qui ce nomme Chmilblik qui comporte 
// 5 valeur de type string et 5 valeur de type int ou float

let Chmilblik = [
    "Bonjour",
    "Je",
    "suis",
    "très",
    "fort",
    10,
    4.5,
    70,
    1151,
    45.56548
]
console.log(Chmilblik)
console.log(Chmilblik.length)

// getElemntById séléctionne un élement qui à l'id défini sur 
// animal dans ce cas
// addEventListener créer une écoute d'évenement 
let animal = "Autruche"
let temp = ""
console.log(document.getElementById('animal'))
document.getElementById('animal').addEventListener('click', function() {
    // Je regarde le texte qui ce trouve dans cette élément 
    temp = document.getElementById('animal').innerHTML 
    // Je modifie le texte qui ce trouve dans cette élément par la valeur
    // de la variable animal 
    document.getElementById('animal').innerHTML = animal
    document.getElementById('animal').style.fontSize = '10em'
    animal = temp
})

while (false) {} // Tandis que ce qu'il ce trouve dans les parenthèses 
// est vrai elle tourne

for(var i=1; i <= 10; i++) { 
    // Je défini un variable i qui s'incrémenter de 1 tout les tours de 
    // la boucle grace à i++ 
    // Et je lui demande de tourner jusqu'à ce que i soit supérieur à 10
    console.log(i) 
}

// La boucle tourne jusqu'à la taille du tableau 
for(var i=0; i < Chmilblik.length; i++) {
    console.log(Chmilblik[i])
    if (i == 3) {
        break
    }
}

do {
    console.log('BONJOUR')
    // Elle s'éxecute un fois même si la condition est fausse 
    // Et elle continue si de s'éxectuer si la condition est vrai
} while (false);

for (index in Chmilblik) {
    console.log(index)
}

// Tableau Associatif 
var tab_assoc = {"ami":"Chien", "cafe":"Caféine" }

for (index in tab_assoc) {
    console.log(index)
}

for(var i=10; i >= 0; i--) {
    // console.log("Il reste " + i + " lignes à écrire")
    // console.log("Il reste ", i, "lignes à écrire")
    console.log(`Il reste ${i} ligne${i <= 1 ? '' : 's'} à écrire`)
}


// i <= 1 ? '' : 's'
// Reviens à faire 
// if (i <= 1) { // Si vrai
//     console.log('')
// } else { // Sinon faux
//     console.log('s')
// }


function diviseur(n) {
    var i = 2;
    var temp = '1';
    while (i <= n) {
        if (n % i == 0) {
            temp = temp + ', ' + i;
        }
        i++;
    }
    return temp
}


for (let index = 1; index <= 100; index++) {
    console.log(`Les diviseurs de ${index} sont: ${diviseur(index)}`)
}
