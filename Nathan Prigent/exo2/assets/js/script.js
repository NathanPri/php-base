"use strict"

// declaration de mes variables
var case_1 = document.getElementById('case_1');

var case_2 = document.getElementById('case_2');


// ecoute de l'évenement du clavier
case_1.addEventListener('keyup', do_on_keyup);
function do_on_keyup(){

    case_2.value = case_1.value;


}

