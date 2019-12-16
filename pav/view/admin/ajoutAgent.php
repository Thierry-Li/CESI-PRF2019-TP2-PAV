<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* Page présentant l'onglet Ajouter un agent avec un formulaire
* développement par Thierry
**/
?>
<div class="agentAjout">
    <h4>Ajouter un nouvel agent</h4>
    <form action="ajoutAgentPOST.php" method="post">
        <div class="formPrenom">
            <label for="agentPrenom">Prenom du nouvel agent</label>
            <input type="text" name="prenom_agent" placeholder="prenom du nouvel agent">
        </div>
        <div class="formNom">
	        <label for="agentNom">Nom du nouvel agent</label>
	        <input type="text" name="nom_agent" placeholder="nom du nouvel agent">
	     </div>
        <div class="formIdentifiant">
            <label for="agentIdentifiant">Identifiant du nouvel agent</label>
            <input type="text" name="identifiant" placeholder="Identifiant du nouvel agent">
        </div>
        <div class="formMotdepass">
            <label for="agentPassword">Mot de passe du nouvel agent</label>
            <input type="text" name="password_agent" placeholder="Mot de passe du nouvel agent">
        </div>

        <div class="button, submit">
            <button type="submit">Créer</button>
        </div>
    </form>
</div>