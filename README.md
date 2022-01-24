Terminál paracsok amiket az elkészítés során használtam és még pár info:

composer global require laravel/installer
laravel new webprog3
cd webprog3
composer require laravel-frontend-presets/tailwindcss --dev
php artisan ui tailwindcss --auth
npm remove laravel-mix
npm install laravel-mix --save-dev
npm install cross-env --save-dev
npm run watch

A .env fájlban átkell írni az adatbázist egy meglévőre.
Az authentikációs műveletek is eztán fognak műlödni.

Controllers:
php artisan make:controller PagesController
php artisan make:controller PostsController --resource
php artisan make:model Post

composer require cviebrock/eloquent-sluggable


php artisan make:migration posts
php artisan migrate

