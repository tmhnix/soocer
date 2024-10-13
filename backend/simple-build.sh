#!/bin/sh
#go parent and execute the script
#cd ..

#checkout source code
#git fetch && git checkout develop
#git pull -f
git reset --hard HEAD
git pull origin master

npm run build