# laravel_template
Files changed from initial install:
- *`/routes/web.php`* - defines get/post routes (similar to an API)
- *`/app/Message.php`* - supposed to model the message, but Laravel is smart :)

[1;2C- *`/app/Http/Controllers/HomeController.php`* - defines what gets shown on the home.blade.php page
- *`/resources/views/master.blade.php`* - base HTML file
- *`/resources/views/message.blade.php`* - shows an individual message
- *`/app/Http/Controllers/MessageController.php`* - controls what hapens with the message.blade.php file (create message or view message)
- *`/resources/views/home.blade.php`* - HTML showing a form for adding a message, and shows all messages below

# Usage
```
cd /var/www/html
git clone https://github.com/kurdtpage/laravel_template.git
php artisan serve
```
Go to http://localhost:8000
