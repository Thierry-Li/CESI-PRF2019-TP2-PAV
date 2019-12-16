# CESI-PRF2019-TP2-PAV 
https://github.com/FAZjaune/CESI-PRF2019-TP2-PAV <br>
TP2 en équipe. Création d'une web app Front-Office et d'un Back-Office.<br>
WIP / Projet à continuer et à terminer.
____________________________
### Contexte du projet : 
Ce projet concerne la création d'une web application permettant la dématérialisation des fiches de relevé des PAV (Points d'Apports Volontaires).<br>
Actuellement un administrateur, après connexion, a le droit à la gestion des PAV, des agents et la création des tournées pour les attribuer à ces derniers.<br>
Un agent qui effectue sa tournée de relevé de PAV, après connexion à son tableau de bord, pourra renseigner divers champs de relevé.

### Langage du projet :
Ce projet à pour but de former au HTML, PHP et SQL par le biais d'un système de connexion. D'ajout, modification et suppression d'élèments dans une base de données.

### Guide du démarrage :
>**Wamp** : Pour windows comprenant un serveur Apache2, du langage de scripts PHP et d’une base de données MySQL. Il possède également PHPMyAdmin pour gérer plus facilement vos bases de données.
>    
>Il est important de mettre le ProjetPav comme tous vos projets php dans le fichier wamp64/wwww
>
>**Mamp** : Contient les mêmes élèments que Wamp mais s'adresse au système d'exploitation Mac.
>   
>    
>**Lamp** : Pour linux, l'installation se fait manuellement.
>    
 * Installation des paquets :  
>>sudo apt install apache2 php libapache2-mod-php mysql-server php-mysql
>    
 * Pour pouvoir lancer des scripts SQL :    
>>sudo mysql
>      
> Vous trouverez donc le projet à l'adresse suivante sur votre navigateur :
>>localhost/pav/

### Cadre du projet :
Projet dans le cadre d'une formation de reconversion professionnelle Analyste Programmeur de 4 mois au CESI Campus Bordeaux.<br>
Formation débutée le 21/10/19.<br>
TP2 débuté le 22/11/19.<br>
Soutenance de projet le 20/12/19.

### Objectif futur du projet :
> * Terminer la création et l'assignation d'une tournée à un agent (comprenant une liste de PAV)
> * Terminer la gestion des PAV (ajout, modification et suppression)
> * Ajout des Regular Expression et pattern à l'authentification
> * Ajout une table de hashage SHA-1 voire un cryptage AES-256
> * Porter le projet dans une optique orientée objet,
> * Structuration méthode Model Vue Controller
>
#### Auteur
Thierry Li

#### Crédits
Je remercie mes collègues Adèle Aguessy et Axel Latin pour leurs contributions au projet. Des remerciements également au CESI campus Bordeaux pour la formation AP-PRF 2019.