## Lumen Redis

Server requirement

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension

Install this project

1. Download and install Composer (https://getcomposer.org/)
2. Open your cmd and set path to this project
3. Run "composer install"
4. Copy .env.example to .env
5. Set mysql connection (host,user,pass,db) and redis in .env
6. Run "composer install"
7. Run "php artisan migrate"
8. Run "php artisan db:seed"
9. Run "php -S localhost:8000 -t public"
10. Enjoy

Route

1. http://localhost:8000/api/users -> show all users
2. http://localhost:8000/api/user/{id} -> find user with ID
