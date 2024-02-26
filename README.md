<h1>simple job listing and finder</h1> 
<h3>Installation</h3>
1. Git clone:<br>
git clone https://github.com/jenifferakinyi/laravel-Devjobs.git
2. Cd into DEVJOBS directory<br>
cd DEVJOBS
3. Install via composer<br>
composer install
4. Install Dependencies: You can use one of either, npm, or yarn.<br>
npm install
5. Copy .env.example and configure your database:<br>
cp .env.example .env
6. Generate APP_KEY for Laravel:<br>
php artisan key:generate
7. Migrate the database tables to your DB:<br>
php artisan migrate
8. Run the application<br>
php artisan serve
9. Run Dev:<br>
npm run dev
