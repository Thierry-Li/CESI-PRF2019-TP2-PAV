<?php
include("../../model/model.php");

// Récupère les toutes entrées de l'user qui s'est connecté avec son identifiant
$agentConnecte = $bdd->query("SELECT * FROM users WHERE identifiant = '".$_SESSION['identifiant']."'");
$row = $agentConnecte ->fetch();
//var_dump($row);

if ($_POST['action'] == 'logout') {
	unset($_SESSION['identifiant']);
	unset($_SESSION['password']);
	 header('Location: ../../index.php');
}

?>
<?php include("../../config/htmlHead.php"); ?>
<body>
<?php if(isset($_SESSION['identifiant'])) { ?>
	<div class="wrapper">
		<?php include('../../view/commun/header.php'); ?>
		<div class="titre">
			<h1>Bienvenue dans votre espace agent de relevé</h1>
			<h2>Votre identifiant <?php echo $_SESSION['identifiant']; ?></h2>
			<h3><?php echo $row['prenom'] . " " . $row['nom']; ?></h3>
			<p><?php echo "Date du jour : ", strftime("%A %d %B %Y"); ?> <br> <?php echo "Il est : ", date('H:i'); ?></p>

			<form method="post">
				<div class="button, deconnexion">
	            <button type="submit" name="action" value="logout">Se déconnecter</button>
	            </div>
	        </form>
		</div>
		<section class="ficheAgent container-fluid">
			<button class="collapsible">Open Section 1</button>
			<div class="content">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
			<button class="collapsible">Open Section 2</button>
			<div class="content">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
			<button class="collapsible">Open Section 3</button>
			<div class="content">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
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
