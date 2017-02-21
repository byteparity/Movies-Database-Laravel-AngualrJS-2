# Movies-Database-Laravel-AngualrJS-2

This project was generated with [angular-cli](https://github.com/angular/angular-cli) version 1.0.0-beta.26 and  [Laravel](http://laravel.com/docs)  version 5.3.

Demo Website URL: [angular-frontend](http://movies-demo.byteparity.com)

Backend Demo Video: https://youtu.be/igBTeoPHUTk

## Setup frontend angular cli & backend laravel movies project


## Client Setup (AngularJS)

1.  Firstly, you have to download or clone git angular project to your local machine into your local server directory ex. `www or htdocs`
2.  Install [Node.js® and npm](https://nodejs.org/en/download/) if they are not already on your machine.
3.  Remote CLI to your download directory ex `C:\xampp\htdocs\movies`
4.  Run `npm install` command
5.  Run `ng serve` command launches the server, watches your files, and rebuilds the app as you make changes to those files
6. update your local server directory access link in `root\src\app\constant.ts` file on api and image link for ex. `http://localhost/movies/server/public`


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

You can now access angular frontend project at `localhost:4200` and laravel backend project at `localhost/movies/server/public` :)

## Credential of server(Admin Panel)

Username : `hello@byteparity.com`
Password : `123456`

## Further help

To get more help on the `angular-cli` use `ng help` or go check out the [Angular-CLI README](https://github.com/angular/angular-cli/blob/master/README.md).

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).
