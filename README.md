<p align="center"><img src="/public/logo.png" width="400"></p>

## About this Laravel app

Creation of a Basic CRUD with API and views in Laravel.

## Screenshots

<img src="/public/screenshot.gif">

## Installation

Please check the official Laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)

Clone the repository

    git clone https://github.com/benzuri/laravel-crud.git

Switch to the app folder

    cd laravel-crud

Install all the dependencies using composer

    composer install

Make the required configuration changes in the .env file if you need

    notepad .env

Generate a new application key

    php artisan key:generate

Run the database migrations with seed (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
