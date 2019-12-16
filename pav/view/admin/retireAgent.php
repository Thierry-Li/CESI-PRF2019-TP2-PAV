<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* Page présentant l'onglet Retirer un agent avec une liste des agents
* L'agent sélectionné et validé sera supprimé à la page suivante
* développement par Thierry
**/
?>
<div class="retireAgent">
    <h4>Sélectionner un agent à retirer</h4>
    <form action="retireAgentPOST.php" method="post">
       <select name="retireAgent" size="6">
       <?php
			$requete = $bdd->query("SELECT id_user, prenom, nom FROM users WHERE role = 2 ORDER BY prenom");
	        while($donneesUsers = $requete->fetch())
	        {
	            echo "<option>" . $donneesUsers['id_user']. " - ". $donneesUsers['prenom']. " ". $donneesUsers['nom'].'<br>' . "</option>";
	        }
	   ?>
       </select>

        <div class="button, submit">
            <button type="submit">Retirer agent sélectionné</button>
        </div>
    </form>
</div>