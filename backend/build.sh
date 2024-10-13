#!/bin/sh
#go parent and execute the script
#cd ..

#checkout source code
#git fetch && git checkout develop
#git pull -f
git reset --hard HEAD
git pull origin master

#set write permission for cache folder
#TODO - should not use 777
sudo chmod 777 bootstrap/cache -R
sudo chmod 777 storage/logs -R
sudo chmod 777 storage/framework -R
sudo chmod 777 storage/app -R
#note - should not set 777 here, just for development env
#sudo chmod 777 public/uploads -R
sudo chmod 777 logs -R

php artisan down
#kill process
pm2 stop app.json

#install dependencies
npm install
composer install

php artisan migrate

## gulp
npm run build
#TODO - run build command for production

#start app
pm2 start app.json
php artisan up