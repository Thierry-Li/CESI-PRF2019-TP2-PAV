<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* Page de l'administrateur après connexion avec ses identifiants
* Affichage des onglets de gestion des Agents / PAV / Tournées
* développement par Thierry
**/
include("../../model/model.php");
// Affichage des données passées par la $_SESSION
//if (isset($_SESSION['identifiant'])) {
//	 echo $_SESSION['identifiant'];
//}

// Récupère les toutes entrées de l'user qui s'est connecté avec son identifiant
$adminConnecte = $bdd->query("SELECT * FROM users WHERE identifiant = '".$_SESSION['identifiant']."'");
$row = $adminConnecte ->fetch();
//var_dump($row);

if(!empty($_POST['action'])){
	if ($_POST['action'] == 'logout') {
		unset($_SESSION['identifiant']);
		unset($_SESSION['password']);
		 header('Location: ../../index.php');
	}
}

?>
<?php include("../../config/htmlHead.php"); ?>
<body>
<?php if(isset($_SESSION['identifiant'])) { ?>
	<div class="wrapper">
		<?php include('../../view/commun/header.php'); ?>
		<div class="titre">
			<h1>Bienvenue dans votre espace administrateur</h1>
			<h2>Votre identifiant <?php echo $_SESSION['identifiant']; ?></h2>
			<h3><?php echo $row['prenom'] . " " . $row['nom']; ?></h3>
			<p><?php echo "Date du jour : ", strftime("%A %d %B %Y"); ?> <br> <?php echo "Il est : ", date('H:i'); ?></p>

			<form method="post">
				<div class="button, deconnexion">
	            <button type="submit" name="action" value="logout">Se déconnecter</button>
	            </div>
	        </form>
		</div>
		<section class="navAdmin container-fluid">
			<button class="collapsible">Ajouter nouvel agent</button>
			<div class="content"><?php include('ajoutAgent.php'); ?></div>

			<button class="collapsible">Modifier un agent existant</button>
			<div class="content"><?php include('selectAgent.php'); ?></div>

			<button class="collapsible">Retirer un agent</button>
	        <div class="content"><?php include('retireAgent.php'); ?></div>
		</section>
		<?php include('../../view/commun/footer.php'); ?>
	</div> <!-- fin .wrapper -->
<?php } else { ?>
	<h1>Vous ne vous êtes pas authentifié !</h1>
	<form method="post">
        <div class="button">
        <button type="submit" name="action" value="logout">Retour à l'écran d'authentification</button>
        </div>
    </form>
<?php } ?>
<?php include('../../config/importJS.php'); ?>
</body>
</html>
