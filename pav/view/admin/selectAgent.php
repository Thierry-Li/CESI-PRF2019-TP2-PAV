<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* Page présentant l'onglet Modifier un agent avec un formulaire Listbox de l'agent à selectionner pour modification
* développement par Thierry
**/
?>
<div class="modifieAgent">
	<h4>Sélectionner un agent à modifier</h4>
	<form action="modifieAgent.php" method="post">
	   <select name="modifieAgent" size="6" required>
	   <?php
			$requete = $bdd->query("SELECT * FROM users WHERE role = 2 ORDER BY prenom");
			foreach($requete as $row)
			{
			?>
				<option value="<?php echo $row['id_user']; ?>"> <?php echo $row['id_user']. " - ". $row['prenom']. " ". $row['nom'].'<br>' ; ?></option>;
			<?php
			}
	   ?>
	   </select>

		<div class="button, submit">
			<button type="submit" name="submit">Choisir cet agent à modifier</button>
		</div>
	</form>

</div>