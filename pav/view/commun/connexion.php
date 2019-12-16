<?php
/**
* 19/12/13
* Projet2PAV - équipe 1 : Adèle Aguessy, Axel Latin, Thierry Li
* Affichage du formulaire d'authentification par identifiant et mot de passe
* développement par Axel, Thierry et Adèle
**/
// Affichage des données passées par la $_SESSION
$_SESSION['identifiant'] = $_POST['identifiant'];
$_SESSION['password'] = $_POST['password'];
//var_dump($_SESSION['identifiant']);
//var_dump($_SESSION['password']);

//formatage donnée
$bdd->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

// Système de check authentification BDD si identifiant et password correspondent
if(!empty($_POST) && !empty($_POST['identifiant']) && !empty($_POST['password'])){
    $req = $bdd->prepare('SELECT * FROM users WHERE identifiant = :identifiant');
    $req->execute(['identifiant' => $_POST['identifiant']]);
    $users = $req->fetch();

    if($users->role==2 && $_POST['password']==$users->password){
        header('Location: view/agent/pageAgent.php');
    }elseif ($users->role==1 && $_POST['password']==$users->password){
        header('Location: view/admin/pageAdministrateur.php');
    }else{
        echo("Ce compte n'existe pas");
    }
}

?><section id="connexion">
    <div class="connexion">
        <h2>Votre espace de connexion</h2>
        <form action="" method="post">
            <div class="formId">
                <label for="identifiant">Identifiant</label>
                <input type="text" id="identifiant" name="identifiant">
            </div>
            <div class="formPassword">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="button, submit">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</section>