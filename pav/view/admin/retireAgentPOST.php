<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* L'agent sélectionné à la page précédente est supprimé avec la requête DELETE FROM
* développement par Thierry
**/

require('../../model/model.php');
include("../../config/htmlHead.php");

$retireAgent = $_POST['retireAgent'];
$sql = "DELETE FROM users WHERE id_user = '".$retireAgent."'";
$bdd -> exec($sql);
echo "Agent retiré avec succès !";

$bdd = null;
?>

<div class="button, deconnexion">
    <button type="submit"><a href='pageAdministrateur.php'>Revenir à la page administrateur</a></button>
</div>