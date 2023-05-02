### Brief_7_esport

Groupe : David, Leo, Samuel

## Installer le projet

- git clone git@github.com:Maalxi/brief_7_esport.git ( prérequis : Installer php, apache2 et Mysql)

- Placer le fichier Brief_7_Esport dans public_html (Il se trouve à la racine 'cd ~')

- Modifier le fichier DBManager.php avec vos informations :

 'mysql:host=localhost;dbname=<NomDeLaBdd>;charset=utf8',
 'VotreNomDutilisateur', // (le plus fréquent : 'root')
 'VotreMotDePasse'

- Lancer votre navigateur et entrer cette adresse (en modifiant le nom de l'utilisateur par le vôtre) : 'http://localhost/~NomDutilisateur/brief_7_esport/'

#

Votre MVP (produit minimum viable) pour le projet Netflix like à convaincu vos responsables et les clients, bien joué !

​

Comme vu précédemment avec votre responsable technique vous rejoignez le pôle backend de l’agence pour plusieurs semaines. Vous n’êtes pas seul à rejoindre le pôle pour découvrir le côté backend d’une application, le responsable du pôle a constitué une équipe de trois développeurs dont vous, et souhaite vous faire travaillez sur un nouveau MVP.

​

Le MVP en question est une application métier destinée à une agence E sport, leur secteur est en expansion et ils souhaitent se munir d’un outil pour gérer leurs différentes équipes, compétitions, etc. Ce projet est à réaliser en équipe.

​

Ce projet est un MVP, il n’est pas nécessaire de passer du temps sur un design poussé, le minimum syndical + responsivité seront déjà très apprécié.

​

L’application s’articule autour de pages d’administration, sur chaque page d’administration on retrouve un tableau avec les données et un formulaire pour ajouter de nouvelles. Les éléments du tableau sont administrables (éditions et suppressions). Les données sont stockées dans la base de données et le projet utilise PHP, CSS et JS sans aucunes librairies.

​

Appuyez-vous sur le MPD précédemment réalisé et créez une page d’administration pour chacune des entités.
