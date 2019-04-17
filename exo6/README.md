# Exercice 6

## Travailler avec plusieurs conteneurs

Dans cet exercice, nous allons voir comment créer plusieurs services, réseaux et volumes
à l'aide de Compose.

*Objectifs*:
* Comprendre le fonctionnement de Compose
* Comprendre le fonctionnement des réseaux et des volumes Docker

*Instructions*:

* Reprendre le fichier `docker-compose.yml` de l'exercice précédent.
* Rajouter un service avec l'image `mariadb`.
* Monter le volume locale `www/` dans `/var/www/html`.
* Créer un volume nommé pour les données de la base de donnée et l'attacher au repéroire `/var/lib/mysql/data`.
* Créer un réseau pour connecter les deux conteneurs.
