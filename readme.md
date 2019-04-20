# laravel_template
Based off https://www.youtube.com/watch?v=ubfxi21M1vQ
Files changed from initial install:
- *`/routes/web.php`* - defines get/post routes (similar to an API)
- *`/app/Message.php`* - supposed to model the message, but Laravel is smart :)
- *`/resources/views/master.blade.php`* - base HTML file, most views extend this
- *`/resources/views/home.blade.php`* - HTML showing a form for adding a message, and shows all messages below
- *`/resources/views/message.blade.php`* - shows an individual message
- *`/app/Http/Controllers/HomeController.php`* - controls what happens on the *`home.blade.php`* page
- *`/app/Http/Controllers/MessageController.php`* - controls what happens on the *`message.blade.php`* page (create message or view message)

# Usage
```
cd /var/www/html
git clone https://github.com/kurdtpage/laravel_template.git
cd laravel_template
cp .env.example .env
```
Modify the *`.env`* file to suit your needs
```
php artisan serve
```
Go to http://localhost:8000
