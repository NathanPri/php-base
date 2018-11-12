var a = true;
var b = false;
var c = 42;
var d = 0;

//Condition if_______________________________________________________





// Est ce que A est vrai?
if(a){
    console.log("A est vrai !");
}

// Est ce que B est vrai?
if(b){
    console.log("B est vrai !");
}

// Est ce que B n' est PAS vrai?
if(!b){
    console.log("B  n'est  PAS vrai !");
}

// Est ce que C est vrai?
if(c){
    console.log("C est vrai !");
}

// Est ce que D n' est PAS vrai?  (null, undefined, false ou 0 est FALSE)
if(d){
    console.log("D est vrai !");
}


// Condition IF ELSE_________________________________________________
// Est ce que B est vrai .... sinon ....?
if(b){
    console.log("B est vrai !");
} 
else {
    console.log("B n'est PAS vrai DU TOUT, m'enfin !");
}


// Condition IF... ELSE IF_________________________________________________
if(b){
    console.log("B est vrai !");
} 
else if ( c > 10 ) {
    console.log("c est inf a 10 !");
}


// Condition IF... ELSE IF ... ELSE_________________________________________________
if(b){
    console.log("B est vrai !");
} 
else if ( c < 10 ) {
    console.log("c est inf a 10 !");
} else{
    console.log("Aucune des condtions n'est réalisée");
}

// Opérateur ternaire   : permet de faire une condition et d'affecter le resultat de la condition a une varibale 

console.log( a ? "Yep" : "Nope");
var e= c > 10 ? "C+" : "C-";
console.log(e);




console.log (d || 123);   //( tu cherche la valeur : d et donc si d n'est pas vrai remplace le par 123)

function test (arg){
    // var argument = arg;  (arg n'est pas défini (undefined ou false) alors valeur par défaut = 567)
    var argument = arg || 567;

    console.log(argument)
}
test();

//revoir le Modulo