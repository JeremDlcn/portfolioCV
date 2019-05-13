# Projet Portoflio CV web


Le projet **portfolio/CV** est un site web crée à l'occasion d'un projet de première année en école d'informatique se déroulant du 4 avril au 7 juin 2019. 

Le site se présente sous la forme d'un **"one page"** ou toutes les informations sont regroupés au même endroit pour avoir une lecture du portfolio plus rapide, et il y a aussi une page contact permettant de communiquer avec l'administrateur du site.
Du côté administration une page y est dédié et permet de modifier chaque texte et  image.

![page de presentation](https://vibrant-knuth-d6e0a8.netlify.com/mockaccueil.png)

# Structure

Les éléments qui composent le projet sont:
 - Un site statique HTML/CSS
 - Un Serveur PHP
 - Une base de données PostgreSQL
 - Une plateforme de développement web (WAMP)
 
Les technologies utilisés dans ce projet sont:
- HTML /CSS
- Javascript
- PHP
- SQL
 
 Le site est composé de 5 sections:
 - La section présentation
 - La section Passions et Hobbies
 - La section Compétenes
 - La section Parcours
 - La section Réalisations
 
 
## Fichiers et Dossier

- **Dossier**
	- index.html
	- contact.html
	- admin.php
	- README.md
	- main.js
	- style.css
	- **install**
		-  postgreinstall.sql
	- **image**
	
Le dossier contient **5** fichiers et **1** sous-dossier permettant de contenir les images
Le fichier **index.html** qui est le fichier principale comportant la présentation, parcours,  compétences ainsi que mes réalisations.
Le fichier **contact.html** correspond à la page contact composé d'un formulaire permettant de contacter l'administrateur.
Le fichier **admin.php** est le fichier permettant d'administrer le site grâce à une page d'administration.
Le fichier **README.md** est le fichier d'explication du projet portfolio qui sera visible depuis github.
Le fichier **main.js** est un fichier javascript permettant d'ajouter de l'animation au site.
Le fichier **style.css** est le fichier css permettant de mettre en page le site.
Le fichier **postgreinstall.sql** est le fichier contenant les paramètres de la base de données permettant  à n'importe qui de recréer la même base de données.

## Mise en place du site
1. Téléchargez ou clonez le projet  `git clone https://github.com/JeremDlcrn/portfolioCV.git`
2. Suivez les étapes d'installation du serveur PHP ci-dessous
3. Suivez les étapes d'installation de la base de données
4. Il ne vous reste plus qu'à vous connecter à la page d'administration du site


## Installation du serveur PHP
Le serveur PHP va permettre de mettre en ligne le site et de permettre l'échange d'informations entre le site et la base de données (envoi de message, gestion administrateur).
Pour commencer l'installation de notre serveur PHP nous allons télécharger une plateforme de développement web qui permet une installation groupé de l'infrastructure pour faire marcher un site:
La plupart des plateforme de développement est constitué de:
- Interface graphique (Windows, Linux, MacOS)
- Serveur Web (Apache, ...)
- Langage côté serveur (PHP, Perl, Python, ...)
- Base de données (MySQL, PostgreSQL, ...)

Elles sont basé sur la plateforme LAMP, ils en existe pour plusieurs type de configurations permettant de répondre aux besoins des différents utilisateurs selon leur système d'exploitation ou encore leur langage de prédilection.
Personnellement je suis sur le système d'exploitation Windows, j'utiliserai donc la plateforme de développement web [WAMP](http://www.wampserver.com/) ( lien: [http://www.wampserver.com/](http://www.wampserver.com/) )

Après l'avoir télécharger, il faut exécuter  le **.exe** et si l'installation c'est bien passé vous pourrez voir l'icône apparaître en bas dans votre barre des tâches (ou dans l'onglet en cliquant sur la flèche.
![L'icône apparait en bas](https://vibrant-knuth-d6e0a8.netlify.com/iconwamp.png)

Puis une fois que vous avez l'icône cliquez dessus pour faire apparaître le menu de WAMP 
![menu wamp](https://vibrant-knuth-d6e0a8.netlify.com/menuwamp.png)
D'ici vous pourrez accéder à tout les outils nécessaire pour la mise en place de votre site.

## Installation de la Base de données
La base de données permet de stocker des informations tel que les chemins des image, du texte ou encore des liens vers d'autre site web.
Ils existent de nombreux types de base de données, mais dans mon cas j'ai du utiliser une base de données en PostgreSQL qui est géré par le logiciel [pgadmin 4.4](https://www.postgresql.org/download/) ( lien: [https://www.postgresql.org/download/](https://www.postgresql.org/download/) )
Une fois lancé le programme vous ouvre le navigateur et vous arrivez sur cette page permettant de gérer les serveur ou encore d'accéder au paramètres de pgadmin 4.
 
![enter image description here](https://vibrant-knuth-d6e0a8.netlify.com/pgadminaccueil.png)
Utiliser cette commande pour créer une nouvelle base de données

> CREATE DATABASE nomBaseDeDonnees 

Enfin lancer la commande suivante dans votre terminal (cmd, terminal,...) depuis le dossier "install" du projet pour que les tables utilisés par le site ce crée automatiquement sans votre intervention.
Remplacer ***nomUtilisateur*** et ***nomBaseDonnées*** par le nom d'utilisateur postgreSQL que vous avez choisi en installant **pgadmin** et le nom de la base de données de votre choix.
> psql -U nomUtilisateur nombasedonnées < postgreinstall.sql

C'est bon votre base de données est maintenant crée et fonctionelle.

## Connexion à la page d'administration
Rendez-vous à l'adresse suivante: localhost/portfolio/admin.php
Vous pouvez maintenant administrer le site depuis cette page en changeant chaque partie.
![](https://vibrant-knuth-d6e0a8.netlify.com/adminpage.png)
La page d'administration possède plusieurs sections symboliser par des rectangles, chaque sections correspond à une section présente sur le site, cela permet de faire le lien facilement et de savoir où se placer le contenu ajouté.
## Conception du site & Ergonomie
Le portfolio possède un style minimaliste permet de parcourir facilement et lire rapidement le contenu et ainsi ce consacré sur l'essentiel.
Les tons de couleurs sont sombres car le sombre permet de moins abîmer les yeux surtout dans une utilisation nocturne ou la lumière est moins présente.
La forme grise permet de casser la monotonie du fond noir et ainsi apporter du relief sans impacter la lecture
Le bouton contact est visible directement sur la page car si une personne à besoin de me contacter, elle sais où envoyer le message, le menu "burger" permet seulement de se déplacer vers les différentes parties du portfolio car un menu "burger" ne dois comporter que les éléments secondaires ( certaines personnes ne sachant pas l'utiliser toutes les fonctions principales doivent être visible sur la page )
