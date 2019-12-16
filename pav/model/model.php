<?php
/* PHP uniquement, pour l'accès aux données */

session_start();

$user = "root";
$password = "";
$dsn = 'mysql:host=localhost;dbname=pav;charset=utf8';

try{
    $bdd = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

error_reporting(0);

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8','fra');






