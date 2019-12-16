<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* 2e formulaire de l'agent à modifier après la selection de l'agent à modifier (page selectAgent.php)
* développement par Thierry
**/
require('../../model/model.php');
include("../../config/htmlHead.php");

/* Test affichage si on a selectionné le bon agent de la page précédente
$choice = $_POST['modifieAgent'];

if (isset($choice)) {
    echo "L'ID agent selectionné est ". $choice . "<br>";
}
else {
    echo "Aucun agent selectionné";
}
*/

 $choice = $_POST['modifieAgent'];
 $agentAMofifier = $bdd->query("SELECT * FROM users WHERE id_user = '".$choice."'");
 $row = $agentAMofifier ->fetch();

//echo $row['prenom_agent']; echo "<br>";
//print_r($row); echo "<br>";
//var_dump($row); echo "<br>";
?>
<h2>Agent à modifier</h2>
	<form action="modifieAgentPOST.php" method="post">

		<input type="hidden" name="id_user"  value="<?=$row['id_user'];?>" />
		<input type="hidden" name="prenom"  value="<?=$row['prenom'];?>" />
		<input type="hidden" name="nom"  value="<?=$row['nom'];?>" />
		<input type="hidden" name="identifiant"  value="<?=$row['identifiant'];?>" />
		<input type="hidden" name="password"  value="<?=$row['password'];?>" />

		<div class="formPrenom">
			<label for="agentPrenom">Prenom du nouvel agent</label>
			<input type="text" name="modifprenom_agent" placeholder="<?=$row['prenom'];?>">
		</div>

		<div class="formNom">
			<label for="agentPrenom">Nom du nouvel agent</label>
			<input type="text" name="modifnom_agent" placeholder="<?=$row['nom'];?>">
		</div>

		<div class="formIdentifiant">
			<label for="agentPrenom">Identifiant du nouvel agent</label>
			<input type="text" name="modifidentifiant_agent" placeholder="<?=$row['identifiant'];?>">
		</div>

		<div class="formNorm">
				<label for="agentPrenom">Mot de passe du nouvel agent</label>
				<input type="text" name="modifpassword_agent" placeholder="<?=$row['password'];?>">
			</div>

		<div class="button, submit, deconnexion">
			<button type="submit">Modifier avec ces nouvelles entrées</button>
		</div>
	</form>

	<div class="button, submit">
        <button type="submit"><a href='pageAdministrateur.php'>Retour page adminsitrateur </a></button>
    </div>
</div>