#!/bin/sh -e
git fetch --all; git reset --hard origin/master
cp /root/scripts/.env_backup .env
chmod 777 /var/www/app/convivencia/storage/* -Rf
chown www-data:www-data /var/www/app/convivencia -Rf
#git checkout c0b3671         #Fazer rollback de versao - So descomentar e deixar a de cima sem comentar tb
#composer install -o -vvv --no-dev
#composer update -o -vvv --no-dev
#php app/console assets:install --env=prod 
#php app/console assetic:dump --env=prod 
#php app/console assets:install web --symlink --relative 
#php app/console cache:clear --env=prod --no-debug 
#php app/console braincrafted:bootstrap:install 
#chown www-data:www-data * -Rf 
#chmod 777 app/cache -Rf 
#chmod 777 app/logs -Rf 
#chmod 777 upload -Rf
#rm -Rf app/cache/*
#cd /var/www/app/gestao
#rm -Rf cache configs language layouts models modules sessions
# Backpack Deploy
#php artisan migrate --path=vendor/backpack/langfilemanager/src/database/migrations
#php artisan db:seed --class="Backpack\LangFileManager\database\seeds\LanguageTableSeeder"
#php artisan vendor:publish --provider="Backpack\LangFileManager\LangFileManagerServiceProvider" --tag="config" #publish the config file
#php artisan vendor:publish --provider="Backpack\LangFileManager\LangFileManagerServiceProvider" --tag="lang" #publish the lang files
exit 1
