<?php
/*
--------------------------------------------------------------------------------
Fichier de config global
----------------------------------------
Ce fichier contiendra nos variables "globales" pour notre site.
Titre du site, titre de la page, page courante, ...

*/


$siteName = 'Webflix';
// $slogan = 'Le ciné comme à la maison';

// Page courante et titre de la balise title
// $currentPageTitle = (empty($currentPageTitle)) ? null : $currentPageTitle;
//   Si request_uri vaut /home/toto/fichier.php $page renverra fichier 
$currentPageUrl = basename($_SERVER['SCRIPT_FILENAME'], '.php');
