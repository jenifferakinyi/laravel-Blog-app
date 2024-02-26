<h1>simple job listing and finder</h1> 
<h3>Installation</h3>
1. Git clone:
git clone https://github.com/jenifferakinyi/laravel-Devjobs.git
2. Cd into DEVJOBS directory
cd DEVJOBS
3. Install via composer
composer install
4. Install Dependencies: You can use one of either, npm, or yarn.
npm install
5. Copy .env.example and configure your database:
cp .env.example .env
6. Generate APP_KEY for Laravel:
php artisan key:generate
7. Migrate the database tables to your DB:
php artisan migrate
8. Run the application
php artisan serve
9. Run Dev:
npm run dev
