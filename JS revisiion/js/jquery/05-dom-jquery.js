"use strict"

// On cible le bouton et on affiche a la variable btn_move
var btn_move = $('#move');

// On cible l'élement .square
var square = $('.square');

// Qd on clic sur le btn_move
btn_move.on('click', do_on_clic);

function do_on_clic(){

    if(square.css('left') =='0px') {
        square.css('right', '0px');
        square.css('left', '');
    }
    else {
        square.css('left','0px');
        square.css('right', '');
    }
}

// Cibler les champs

var champ_1 = $('#champ_2');
var duplicate = $('#duplication');


// Evenement de clavier sur champ1
champ_1.on('keyup', do_on_keyup);
function do_on_keyup(){
   duplicate.val( champ_1.val( ) );
}

champ_1.on('blur', do_on_blur);
function do_on_blur() {
    square.html( duplicate.val( ) );
    champ_1.val('');
    duplicate.val('');
}

champ_1.on({
    keyup: do_on_keyup, 