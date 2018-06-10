## Introduction
- Promise team develop a platform, application for ecommerce.
- Customer: A personal shop, small shop.

## Guide for developer
- I'm so recommend developer using ubuntu OS
- using docker to implement development environment

### Run project via docker

**Step 1**: install docker

- ubuntu: https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-16-04
- window: https://docs.docker.com/docker-for-windows/

**Step 2**: clont project via SSH `git clone git@gitlab.com:promise-team/promise_ecommerce.git`

**Step 3**: enter project folder: `cd promise_ecommerce`

**Step 4**: run command: `sudo docker-compose up --build`

**Step 5**: set virtual domain ecommerce.local in file hosts

- Ubuntu: edit file `/etc/hosts`
- Window: edit file `C:\Windows\System32\drivers\etc\hosts`

**Step 6**: install php pagekage and compile assets file (sass, ES6, ES7, ...) in project
- install php package `sudo docker-compose exec app composer install`
- install node package `sudo docker-compose exec app npm install`
- compile assets file `sudo docker-compose exec app npm run watch`

**Step 7**: Enter ecommerce.local:81/test in your browser && enjoy!

### Note:
- Enter ecommerce.local:82 to open phpmyadmin (database: ecommerce, user: promise_team, password: 123456)
- Enter docker virtual OS via command: `sudo docker-compose exec app /bin/bash`
- You must enter a docker virtual OS to run `npm`, `php artisan`, `compose`, ...


