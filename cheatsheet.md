## Commandes utiles

### `docker build`

```yml
docker build [options] .
    -t "app/container_name"
```

Créer une image à partir d'un Dockerfile.

### `docker run`

```yml
docker run [options] IMAGE
    -i, --interactive       # attach stdin (interactive)
    -t, --tty               # pseudo-tty
        --name              # name your container
    -p, --publish 5000:5000 # port map
    -P, --publish-all       # publish all ports
    -v, --volume `pwd`:/app # mount (absolute paths needed)
    -e, --env NAME=hello    # variables d'environnements
```

#### Exemple

```sh
$ docker run --name redis -p 6379:6379 redis:3.0.2
``` 

### `docker exec`

```yml
docker exec [options] CONTAINER COMMAND
    -d, --detach        # lancer la commande en arrière plan
    -i, --interacive    # stdin
    -t, --tty           # intéractif
```

Lancer une commande dans un conteneur.

#### Exemple

```sh
$ docker exec app tail log/dev.log
$ docker exec -it app bash
```

### `docker start`

```yml
docker start [options] CONTAINER
    -a, --attach        # attach stdout/err
    -i, --interactive   # attach stdin

docker stop [options] CONTAINER
```

Start/stop un conteneur.

### `docker ps`

```sh
$ docker ps         # list running containers
$ docker ps -a      # list all containers
$ docker kill $ID
```

Manage `container`s using ps/kill.

### `docker image`

```sh
$ docker image ls
$ docker image ls -a
$ docker image ls -a -q
$ docker image rm IMAGE
```
