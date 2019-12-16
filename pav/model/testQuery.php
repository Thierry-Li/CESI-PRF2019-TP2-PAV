<?php
/* Page model de test Query des tables db*/

$tableUsers = $bdd->query("SELECT * FROM users");
$sameName = $bdd->query('SELECT * FROM users WHERE nom="Marriachi" ORDER BY prenom ');

while ($donneesUsers = $tableUsers->fetch())
	{
		echo "<strong>prenom :</strong> " . $donneesUsers['prenom'] . "; <strong>nom : </strong>" . $donneesUsers['nom'] . "; <strong>id :</strong> " . $donneesUsers['identifiant'] . "; <strong>pw :</strong> " . $donneesUsers['password'] . "; <strong>role :</strong> " . $donneesUsers['role'] . " = données Table users."; ?> <br> <?php
	}
while ($donneesSame = $sameName->fetch())
	{
		echo "<strong>SORT même nom// prenom : </strong>" . $donneesSame['prenom'] . "; <strong>nom : </strong>" . $donneesSame['nom'] . "; <strong>id :</strong> " . $donneesSame['identifiant'] . "; <strong>pw :</strong> " . $donneesSame['password'] . "; <strong>role :</strong> " . $donneesSame['role'] . " = données Table users."; ?> <br> <?php
	}

$tableUsers->closeCursor();
$sameName->closeCursor();





