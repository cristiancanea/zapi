#API

# REQUIREMENTS
- php 7.4
- mariadb 10.5.* or mysql 5.7

# BUILD 
Create .env.local and overwrite variables as you wish:
e.g.
APP_ENV=dev
DATABASE_URL="mysql://root:1234567890@127.0.0.1:3306/api?serverVersion=mariadb-10.5.9"

run commands: 

composer install
php bin/console doctrine:migrations:migrate

# START APP ON LOCAL ENV
php -S 127.0.0.1:8000 -t public
