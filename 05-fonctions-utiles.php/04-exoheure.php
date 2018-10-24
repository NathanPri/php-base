<?php
$date = date("l j F Y");
$heure = date("H\h\ i");
$sec = date("s");
Print("Nous sommes le $date, il est $heure et $sec secondes ");
?>

<br/>
<?php

$seconds = date('s');

echo date('l d F Y');
echo ', il est';
echo date('H\hi e\t ');
echo $seconds . ' seconde';
echo ($seconds > 1) ? 's' : '';
?>

<br/>
<?php
// QUel jour il sera dans 10 jours?

var_dump(date('d/m/Y', time()));
var_dump(date('d/m/Y', strtotime('+10 days')));

// Dans combien de jours est Nöel ?
$currentTimestamp = time();
$targetTimestamp = strtotime('25 Decembre 2018');

$total = ($targetTimestamp - $currentTimestamp) /60 /60 /24;
$days = round($total);
$hours = ($total - $days) * 24;


?>