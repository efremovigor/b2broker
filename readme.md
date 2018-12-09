## Установка

git clone https://github.com/efremovigor/b2broker.git

cd b2broker

composer update

Засетить свои конфиги подключения к Mysql в .env

php artisan migrate:fresh

php artisan serve


## Особенности взаимодействия с b2broker_module_tasks

view.php
```php
'providers' => [
            ...
            \Tasks\TaskRouteServiceProvider::class,
            ...
```
