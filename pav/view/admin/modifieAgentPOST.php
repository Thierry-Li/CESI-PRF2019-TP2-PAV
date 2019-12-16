<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* Fonctionnalité de modifier un agent avec UPDATE
* développement par Thierry
**/

require('../../model/model.php');
include("../../config/htmlHead.php");

$id_user = $_POST['id_user'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$identifiant = $_POST['identifiant'];
$password = $_POST['password'];
    //echo "id : ". $id_agent; echo "/ prenom : ". $prenom_agent; echo "/ nom : ".$nom_agent; echo "/ identifiant : ".$identifiant; echo "/ pw : ". $password_agent; echo "<br>";
	//echo "========== <br>";

$modifprenom_agent = $_POST['modifprenom_agent'];
$modifnom_agent = $_POST['modifnom_agent'];
$modifidentifiant_agent = $_POST['modifidentifiant_agent'];
$modifpassword_agent = $_POST['modifpassword_agent'];
	//echo "id : ". $id_agent; echo "/ prenom : ". $modifprenom_agent; echo "/ nom : ".$modifnom_agent; echo "/ identifiant : ".$modifidentifiant_agent; echo "/ pw : ". $modifpassword_agent; echo "<br>";
    //echo "========== <br>";

if (!empty($modifprenom_agent)) {
	if ($modifprenom_agent == $prenom) {
        echo "- Toujours le même prénom : ". $prenom ."<br>";
    } else {
	echo "- Ancien prénom : ". $prenom ."<br>";
	$sql = "UPDATE users SET prenom = '".$modifprenom_agent."' WHERE id_user = '".$id_user."'";
	$bdd -> exec($sql);
	echo "Prenom modifié avec succès ! ==> Nouveau prénom : ". $modifprenom_agent. "<br>";
	}
} else {
	echo "- Toujours le même prénom : ". $prenom ."<br>";
}

if (!empty($modifnom_agent)) {
	if ($modifnom_agent == $nom) {
        echo "- Toujours le même nom : ". $nom ."<br>";
    } else {
	echo "- Ancien nom : ". $nom ."<br>";
	$sql = "UPDATE users SET nom = '".$modifnom_agent."' WHERE id_user = '".$id_user."'";
	$bdd -> exec($sql);
	echo "Nom modifié avec succès ! ==> Nouveau nom : ". $modifnom_agent. "<br>";
	}
} else {
    echo "- Toujours le même nom : ". $nom ."<br>";
}

if (!empty($modifidentifiant_agent)) {
	if ($modifidentifiant_agent == $identifiant) {
        echo "- Toujours le même identifiant : ". $identifiant ."<br>";
    } else {
	echo "- Ancien identifiant : ". $identifiant ."<br>";
	$sql = "UPDATE users SET identifiant = '".$modifidentifiant_agent."' WHERE id_user = '".$id_user."'";
	$bdd -> exec($sql);
	echo "Identifiant modifié avec succès ! ==> Nouvel identifiant : ". $modifidentifiant_agent. "<br>";
	}
} else {
    echo "- Toujours le même identifiant : ". $identifiant ."<br>";
}

if (!empty($modifpassword_agent)) {
	if ($modifpassword_agent == $password) {
        echo "- Toujours le même mot de passe : ". $password ."<br>";
    } else {
	echo "- Ancien mot de passe : ". $password ."<br>";
	$sql = "UPDATE users SET `password` = '".$modifpassword_agent."' WHERE id_user = '".$id_user."'";
	$bdd -> exec($sql);
	echo "Mot de passe modifié avec succès ! ==> Nouveau mot de passe : ". $modifpassword_agent. "<br>";
	}
} else {
    echo "- Toujours le même mot de passe : ". $password ."<br>";
}

$bdd = null;
?>
<div class="button, deconnexion">
    <button type="submit"><a href='pageAdministrateur.php'>Revenir à la page administrateur</a></button>
</div>