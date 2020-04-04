# Laravel-RepDeliv

## Done

### インストール

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

### 設定変更とマイグレーション

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

### ファイル上書き

### キャッシュクリア

```ps
$ php artisan cache:clear
$ php artisan config:clear
$ php artisan route:clear
$ php artisan view:clear
```

### 反映

```ps
$ php artisan migrate
$ composer update

$ php artisan db:seed
 OR
$ php artisan db:seed --class="***TableSeeder"
```
