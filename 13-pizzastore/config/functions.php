

<?php
// Permet de formatter le prix (ex: 13.00 devient 13,00)

function formatPrice($price) {
    
$explodedPrice = explode('.', $price);
return $explodedPrice[0]."<span style='font-size:60%'>€"                                    
.$explodedPrice[1].'</span>'; //Mettre les centimes en exposants


}

?>