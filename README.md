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

![image](https://user-images.githubusercontent.com/73284415/232738613-a66bc621-5c45-45b4-a91d-04b1a7610246.png)

Add Category:
![image](https://user-images.githubusercontent.com/73284415/232773155-97d9c73c-5ed1-4aac-b119-ac775bbe95a9.png)

Add Post:
![image](https://user-images.githubusercontent.com/73284415/232774641-bc5b406e-f630-4846-ba81-b172b9fce36d.png)

Filter based on Category
![image](https://user-images.githubusercontent.com/73284415/232774854-32084329-8731-491a-b975-022d3feb88c5.png)

Search based on Keyword
![image](https://user-images.githubusercontent.com/73284415/232775262-6debd863-7ed1-4ef5-98d5-562a5a402245.png)



