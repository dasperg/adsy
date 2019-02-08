#!/usr/bin/env bash
if [ ! -d "laradock_adsy" ]; then
  # Control will enter here if $DIRECTORY doesn't exist.
  git submodule add -f https://github.com/Laradock/laradock.git laradock_adsy
  cp .env.laradock ./laradock_adsy/.env
  cp docker-compose-laradock.yml ./laradock_adsy/docker-compose.yml
fi
cd laradock_adsy
docker-compose up
docker-compose exec workspace composer install
docker-compose exec workspace php artisan migrate
