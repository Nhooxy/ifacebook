# iFaceBook by TORO Loic et PEREZ Pierre

## Fonctionnalités en plus

### DropZone
Le dropZone est utilisé pour changer de photo de profil ou pour ajouter une photo à un post.
Lorsque nous glissons / déposons une photo, celle-ci est copiée en ajax sur le serveur, puis liée au
post. (ou à l'avatar)
Si besoin (et sur smartphone notamment) le 'click' pour sélectionner la photo est toujours disponible 
en cliquant dans la zone.

### Rechercher un contact
Dans le menu nous avons un 'select2' qui permet en saissisant un nom/prenom/identifiant de recevoir en ajax 
le ou les profils auquels cela correspond.
C'est donc une recherche en ajax de profils.
Lorsque nous cliquons sur un profil nous somme redirigés sur son profil.

### Système de notification natif.
Pour le chat, lorsque un nouveau message est écrit et que nous avons préalablement ouvert la fenetre de chat, ainsi
qu'accepté le droit à notre application d'envoyer des notificaction, alors le système envoie une notificaction
native au système.

### Fichier JS et CSS minifié
Nous avons utilisé GruntJS (avec NodeJs) afin de minifier les fichier JS et CSS pour diminuer la taille des fichiers
à inclure dans la page web, cela permet que le téléchargement des sources soit plus rapide et moins 
gourmand (particulierement utile pour que la page charge plus vite ET pour les smartphones).

## Partage des tâches
Celui-ci a été fait sensiblement en fonction des demandes du TP. Rien à signaler sur cela.

Pierre : Refacto de code pour éviter autant que possible les copier coller, pour respecter 
le checkstyle de la norme symfony2. Avoir des principes de POO. Utiliser les namespaces PHP.

## Résumé des fonctionnalités

### Le chat
Le chat utilise un worker javascript qui permet de lancer un 'thread' afin qu'il soit toujours en execution et 
non bloquant. De plus nous recevons des notification native au système d'exploitation.

### Le mur
Le mur est chargé dynamiquement : lorsque nous scrollons vers le bas, alors une requête ajax avec une petite animation
le temps du chargement apparait, puis les données sont ajoutées.
le like et le partage est fait en ajax, lorsque on like, le numéro est incrémenté, lorsque on partage, une notification
nous indique si cela a fonctionné.
On peut poster un message avec une image depuis le mur.

### Le profil
Depuis le profil, nous pouvons éditer notre avatar et notre statut en ajax (en cliquant sur 'editer'), nous pouvons aussi
poster des messages comme depuis le mur.
Si nous sommes dans le profil d'un ami, nous pouvons poster un message directement depuis son mur. (à destination
de son mur).

### Les amis
Simple liste des utilisateurs de la base avec un lien vers leur profil. Si scroll vers le bas alors charger dynamiquement
(ajax) avec une petite animation (tel que le mur).

## URL de test de l'application :
[Notre URL](https://pedago.univ-avignon.fr/~uapv1400638/ifacebook/ifacebook.php?action=index)
