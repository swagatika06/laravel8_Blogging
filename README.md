# laravel8_blogging

prerequisites:
php:8
mysyl
laravel:8

Set up :
Clone the repo and cd into it
    git clone https://github.com/swagatika06/laravel8_blogging.git
Rename or copy .env.example file to .env
create database laravel8_blog
In your terminal composer install
php artisan key:generate
Set your database credentials in your .env file

php artisan migrate

php artisan storage:link//to view uploade image @local setup

php artisan db:seed(optional)//to populate fake data in db

or
php artisan db:seed --class=PostsTableSeeder
php artisan db:seed --class=CategoriesTableSeeder
php artisan db:seed --class=TagsTableSeeder

php artisan serve

![image](https://user-images.githubusercontent.com/73284415/232738152-6041d368-d371-4d4e-977b-2f3ecfbf39a4.png)
