<?php
/*
--------------------------------------------------------------------------------
Fichier de config global
----------------------------------------
Ce fichier contiendra nos variables "globales" pour notre site.
Titre du site, titre de la page, page courante, ...

*/


$siteName = 'Immobilier';
$slogan = 'Votre site Immo';

// Page courante et titre de la balise title
// $currentPageTitle = (empty($currentPageTitle)) ? null : $currentPageTitle;

$currentPageUrl = basename($_SERVER['SCRIPT_FILENAME'], '.php');
