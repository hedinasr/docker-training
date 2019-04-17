# Exercice 3

## Une image un peu plus complexe

Dans cet exercice vous allez créer une image qui lance un serveur web.

*Objectifs*:
- manipuler les différentes instructions du Dockerfile
- savoir utiliser la commande `docker` et ses différentes options

*Instructions*:

* Créer un fichier et le nommé `Dockerfile`.
* L'image de base devra être `ubuntu:latest`.
* Ajouter la variable d'environnment `DEBIAN_FRONTEND` qui aura pour valeur `noninteractive`.
* Installer les packages suivants :
  - `apache2`
  - `apache2-utils`
  - `php`
  - `php-mysql`
  - `libapache2-mod-php`
* Lancer la commande : `apt-get clean`.
* Exposer le port 80.
* Le conteneur devra lancer au démarrage la commande suivante : `apachectl -D FOREGROUND`.
* Builder l'image.
* Lancer un conteneur (en arrière plan) à partir de l'image créée (ne pas oublier d'exposer le port).
* Supprimer l'image et le conteneur.
