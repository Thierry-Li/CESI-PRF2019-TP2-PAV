<?php
/*
Le Modele (model) : permet l'accès aux données et peut s'agir d'un ensemble de fonctions (procédural) ou de class (POO);
La Vue (view) : s'occupe des interactions avec l'utilisateur : presentation, saisie, validation données;
Le Controleur (controller) : gere la dynamique de l'application, Elle fait le lien entre l'utilisateur et le reste de l'application.

1 ) La demande de l'utilisateur (exemple : requête HTTP) est reçue et interprétée par le Contrôleur.
2 ) Celui-ci utilise les services du Modèle afin de préparer les données à afficher.
3 ) Ensuite, le Contrôleur fournit ces données à la Vue, qui les présente à l'utilisateur (par exemple sous la forme d'une page HTML).
*/

require('model/model.php');
//include('model/testQuery.php');

require('view/commun/authentification.php');


