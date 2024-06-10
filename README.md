# Laravel - View Logs

The package will help to view laravel logs easily.

### Prerequisites

```
PHP >= 5.3.0
```

### Installing

Install the package via [Composer](https://getcomposer.org/download) by following command:

```
composer require hasibkamal/view-logs
```

Once package installation done, register the service provider in `config/app.php` in the `providers array` like bellow:

```
providers' => [
    ...
    HasibKamal\ViewLog\LogServiceProvider::class
  ]
```

For publishing views
```
php artisan vendor:publish \
  --provider="HasibKamal\ViewLog\LogServiceProvider" \
  --tag=views
```

Then add folloiwng route in your routes file:

```
Route::get('/logs', '\Hasibkamal\ViewLog\ViewLogController@index');
```

Now you can browse your laravel website logs using `{your-website-url}/logs`.

For example:

```
http://www.example.com/logs
```

## Enjoy!
