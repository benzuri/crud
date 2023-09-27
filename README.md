<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About this Laravel app

Creation of a Basic CRUD with API and Views in Laravel.

# Getting started

## Installation

Please check the official Laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)

Extract files

    crud.zip

Switch to the Crud folder

    cd crud

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
