

<form method="post">
    <input type="text" name="nombre1" placeholder="nombre n°1"/><label type="number" for="nombre1" id="nombre1" required> </label>
    <input type="text" name="nombre2" placeholder="nombre n°2"/><label type="number" for="nombre2" id="nombre2"  required></label><br />
    <input type="radio" name="add" value="addition" checked>+
    <input type="radio" name="calcul" value="soustraction">-
    <input type="radio" name="calcul" value="division">/
    <input type="radio" name="calcul" value="multiplication">x
    <button type="submit" id="calcul">Calculer</button>

</form>


<?php

if(!empty($_POST)) 
{
        $nbre1= $_POST['nombre1'];
        $nbre2= $_POST['nombre2'];
        $calcul=$_POST['calcul'];
        
        
        if (!is_numeric($nbre1) || !is_numeric($nbre2)){echo "Le calcul est impossible"; exit();}


    if ($calcul == "addition")
    {
        echo ($nbre1 + $nbre2) ;
    }
    elseif ($calcul == "soustraction")
    {
        echo ($nbre1 - $nbre2); 
    }
    elseif ($calcul == "division")
    {
        echo ($nbre1 / $nbre2); 
    }
    elseif ($calcul == "multiplication")
    {
        echo ($nbre1 * $nbre2); 
    }
}
?>

