<?php

session_start(); // On veut utiliser les sssions sur la page

var_dump($_SESSION); // Le tableau est vide la 1ère fois

$countries = ['fr', 'it'];

// J'ajoute les pays dans la session
$_SESSION['countries'] = $countries;

var_dump($countries); // La session doit contenir tous les pays

