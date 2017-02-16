# Laravel PHP Framework

## Server Setup (laravel 5.3)

1.  Firstly, setup wamp, lamp or xampp to your machine and run it
2.  create database `movies` to localhost
3.  Download [composer](https://getcomposer.org/download/) if they are not already on your machine.
4.  Rename `.env.example` file to .env inside your-project-root/server and fill the database information (windows wont let you do it, so you have to open `.env.example` into editor and save as `.env` in same directory ).
4.  Open the console and `cd server-path/your-download-project/server` directory ex `C:\xampp\htdocs\movies\server`
5.  Run `composer install`
6.  Run `php artisan key:generate`
8.  Run `php artisan migrate`
9.  Run `php artisan db:seed` (to run seeders)
10. Run `php artisan serve`

You can now access laravel backend project at `localhost/movies/public` :)

## Credential of server(Admin Panel)

Username : `hello@byteparity.com`
Password : `123456`