<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* Fonctionnalité : Ajout d'un agent dans la BDD avec INSERT INTO
* développement par Thierry
**/
	require('../../model/model.php');
	include("../../config/htmlHead.php");

	$prenom_agent = $_POST['prenom_agent'];
	$nom_agent = $_POST['nom_agent'];
	$identifiant = $_POST['identifiant'];
	$password_agent = $_POST['password_agent'];


    $sql = "INSERT INTO users (prenom, nom, identifiant, password) VALUES ('$prenom_agent', '$nom_agent', '$identifiant', '$password_agent')";
    $bdd -> exec($sql);
    echo "Nouvel agent ajouté avec succès !";

$bdd = null;
?>

<div class="button, deconnexion">
    <button type="submit"><a href='pageAdministrateur.php'>Revenir à la page administrateur</a></button>
</div>