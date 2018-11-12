// depalcer le carré au clic sur le bouton
// 1er chose : detecter le bouton detecter le clic sur le carré


// on cible le bouton
var btn_move = document.getElementById('move');

// On cible l'élement .square
var square = document.getElementsByClassName('square');

// Quand on clique sur le bouton...
// btn_move.addEventListener('click', function(){
//  //..........
// });

<script>
    
    // on cible le bouton
    var btn_move = document.getElementById('move');

    // On cible l'élement .square
    var square = document.getElementsByClassName('square')[0];

    // Quand on clique sur le bouton...
    // btn_move.addEventListener('click', function()

    //  {//..........
    // });

    btn_move.addEventListener('click', do_on_click);
    function do_on_click(){
        if(square.style.right.length == 0) {
            square.style.right = "0px";
        }
        else{
            square.style.left = "0px";
        }
    }
   
    // console.log(square.style.right);
    // square.style.right = "0px";

    // console.log(square.style.right);
    
     ////////

    //// Cibler les champs
    var champ_1 = document.getElementById('champ_2');
    var duplicate = document.getElementById('duplication');

    // Evenement de clavier sur champ 1
    champ_1.addEventListener('keyup', function() {

        // recup de la valeur du champ
        duplicate.value = champ_1.value;
    });

    champ_1.addEventListener('blur', function(){
        square.innerHTML = duplicate.value;
    });
</script>

btn_move.addEventListener('click', do_on_click);
function do_on_click(){
    console.log(square.style.right);
    square.style.right = "0px";

    console.log(square.style.right);
    }

    ////////

    //// Cibler les champs
    var champ_1 = document.getElementById('champ_2');
    var duplicate = document.getElementById('duplication');

    // Evenement de clavier sur champ 1
    champ_1.addEventListener('Keyup', function(){
        // recup de la valeur du champ
        duplicate.value = champ_1.value;

      
    });