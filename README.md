# revers-proxy-projects
Example use of reverse proxy nginx at local environment

## Pre requirements

- Docker
- Docker Compose

## How to start

1. At  the beginning, we need to run reverse-proxy project as it is our only one port sharing project \
It contains only one container with nginx and configurations of all other projects. \
Moreover, it creates name network which is used by other project.

2. Then we need to define all hosts in /etc/hosts file. In our example it is `127.0.0.1 project-one.local project-two.local`

3. At last, we need start our other projects such as project-one or project-two 

## Nice to know
Every project has their own make file u can find in there useful command that helps you run project.
To see what kind of command they are implementing run command `make help` in specific project directory

