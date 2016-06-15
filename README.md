### Setting up docker
Install docker (client)

Commandline reference here: [https://docs.docker.com/engine/reference/commandline/cli/](https://docs.docker.com/engine/reference/commandline/cli/)

```
brew install docker
```

Install docker-compose (making it easier to work with multiple containers)
Commandline reference here: [https://docs.docker.com/compose/reference/
docker-compose up](https://docs.docker.com/compose/reference/
docker-compose up)

```
brew install docker-compose
```

Get dlite (which will run linux on your box to host docker)

```
brew install dlite
```

Install dlite (get the linux image, install it and get docker ready)

```
sudo dlite install -d 20 -v 2.3.0
```

Get dlite op and running

```
dlite start
```

Check if we're ready

```
docker info
```

### Starting the project

Cd to the root of your project, make sure the database dump is in place, then.

```
docker-compose up
```

When you're done, CTRL+c will stop all the containers. If you don't need them anymore, you can remove them completely via.

```
docker-compose rm --all -v -f  
```


### How do I....

Get a prompt?

```
docker-compose exec <service> bash
```

See whats running?

```
docker ps
```

See whats not running (stopped containers)?

```
docker ps -a
```

See what images docker has downloaded?

```
docker images
```

Get rid of an image?

```
docker rmi <image>
```

Get a dump of my database before killing my container?

```
docker-compose exec db sh -c 'exec mysqldump db -u "db" -p"db"' > 100-dump.sql
```

Remove all running services defined in my docker-compose.yml

```
docker-compose rm --all -v -f  
```

Stop all running containers
```
docker ps -q | xargs docker kill

```

Remove all containers

```
docker ps -q -a | xargs docker rm -vf
```

Keep from having to run docker-compose run drush?

```
# Add this to ~/.bash_profile
function drush () {
    local git_root=$(git rev-parse --show-toplevel  2> /dev/null)
    if [[ ! "${1}" == "deploy" && ! -z "$git_root" && -r "$git_root/docker-compose.yml" ]] && grep -q drush: "$git_root/docker-compose.yml"; then
        (cd "$git_root" && docker-compose run --no-deps --rm drush "$@")
    else
        command drush "$@"
    fi
}
```

