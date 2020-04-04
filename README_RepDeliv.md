# Laravel-RepDeliv

## Done

```ps
$ cd C:\Users\y\Documents\GitHub
$ composer global require laravel/installer
$ composer global update

$ laravel new Laravel-RepDeliv --force
$ cd Laravel-RepDeliv
$ composer require doctrine/dbal
$ composer require laravel/helpers
$ php artisan serve
```

-   `config/app.php`

```
'timezone' => 'Asia/Tokyo',
'locale' => 'ja',
'faker_locale' => 'ja_JP',
```

-   `.env`

```
DB_CONNECTION=sqlite
```

```ps
$ php artisan migrate
```
