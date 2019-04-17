# Exercice 2

## Hello World

Dans cet exercice nous allons construire notre première image Docker à l'aide du
Dockerfile.

Cette image sera la plus simple possible : écrire un programme qui affiche `Hello World`
à l'écran, copier ce programme dans l'image, et lancer un conteneur à partir de cette image.

* Créer un fichier et le nommer `Dockerfile`.
* Coller le contenu suivant :

```
FROM scratch
COPY hello /
CMD ["/hello"]
```

* Nous allons compiler le programme C suivant :

```c
#include <stdio.h>

int main() {

	printf("Hello world\n");
	return 0;
}
```

```bash
gcc hello.c -o hello
```

* Builder l'image : `docker build -t hello .`.
* Lancer un conteneur : `docker run hello`.

:warning:
L'erreur suivante devrait s'afficher :
```
standard_init_linux.go:207: exec user process caused "no such file or directory"
```

Pourquoi à votre avis ?

Tout simplement car notre image est basé sur une image bien particulière, l'image `scratch`.
Cette image est complètement vide et sert de base pour toutes les images Docker.

Si vous taper la commande suivante `ldd hello` vous devriez voir quelque chose du genre :
```
linux-vdso.so.1 (0x00007ffc6d349000)
libc.so.6 => /lib/x86_64-linux-gnu/libc.so.6 (0x00007f7ee16e1000)
/lib64/ld-linux-x86-64.so.2 (0x00007f7ee1cd4000)
```

En effet, par défaut, `gcc` compile dynamiquement votre programme. Ce qui fait que
le binaire généré se base sur des librairies partagées qui ne sont pas dans notre
image Docker construite ci-dessus.

Pour pallier à ce problème, il faut compiler statiquement notre programme à l'aide
de l'option `-static`.

```
gcc -static hello.c -o hello
```

Rebuilder et relancer le conteneur, `Hello World` devrait s'afficher correctement.
