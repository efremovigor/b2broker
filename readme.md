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
    'paths' => [
        resource_path('views'),
        __DIR__ . '/../vendor/b2broker_module_tasks/src/Tasks/View',
    ]
```
router/api.php

```php
foreach (Routes::getApiRoutes() as $method => $list) {
    foreach ($list as $url => $action) {
        Route::$method($url, $action);
    }
}
```
router/web.php

```php
foreach (Routes::getRoutes() as $method => $list) {
    foreach ($list as $url => $action) {
        Route::$method($url, $action);
    }
}
```
