# Exercice 4

## Un peu de personnalisation

Dans cet exercice, nous allons reprendre le Dockerfile construit dans l'exercice précédent, et personnaliser notre site web.

Si vous voulez partir d'une base propre, vous pouvez prendre le Dockerfile suivant :

```
FROM ubuntu

ENV DEBIAN_FRONTEND noninteractive 

RUN apt-get update && \
  apt install -y apache2 apache2-utils && \
  apt-get clean 

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]
```

*Instructions*:

* Copier le contenue du répertoire `www` dans `/var/www/html`.
* Builder l'image.
* Lancer un conteneur en mappant le port 80 du conteneur sur le port 8080 de votre machine
  et en montant le répertoire `www` sur `/var/www/html`.
* Ouvrer votre navigateur à l'adresse http://localhost:8080

*Questions*:

* Modifier le fichier `www/index.html` et rafraichissez la page web, qu'observez-vous ?
