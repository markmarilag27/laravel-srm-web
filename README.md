### Getting started
Requirements
- Docker engine
- Docker compose v1
- Rootless (if you are in mac/linux)

Clone the project
```
$ git clone git@github.com:markmarilag27/laravel-srm-web.git
```
Copy the environment file
```
$ cp .env.example .env
```
Build the image
```
$ docker-compose build app
```
Up and running
```
$ bash ./run-start.sh
```
Entering to container
```
$ bash ./run-exec-container.sh
```
Stop to container
```
$ bash ./run-stop.sh
```
