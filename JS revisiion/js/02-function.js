"use strict"
// Fonction Simple

// Déclaration d'une fonction déclarative
function ma_fnc_0(){
    console.log("Ma fonction 0");
}

// Fonction anonyme
var ma_fnc_1 = function(){
    console.log("Ma fonction 1");
};

//Appel ede la fonction
ma_fnc_0();
ma_fnc_1(); //pour appeler la fonction anonyme il faut appeler la var comme une fonction 


// Fonction avec des param d'entrés
function ma_fnc_2( arg_1 ){
    console.log("Ma fonction 2 :"+ arg_1);
}
ma_fnc_2("Hello World");

//Sortie d'une fonction
function ma_fnc_3( arg_1){
    return "Hello"+arg_1;
}

console.log( ma_fnc_3("World"));
console.log( ma_fnc_3("Bobby"));

// Param d'entée par défaut
function ma_fnc_4(arg_1 = "Freedom"){
    return arg_1;
}
console.log( ma_fnc_4());  //(ce qui est mis dans () va écrasé ce qui est déja présent dans la fonction)
