# auto-helper
Easily add helper functions and classes to your laravel project.

## Installation

First, pull in the package through Composer.

    composer require kodjunkie/auto-helper

If you are running **Laravel v5.5** and **above** you can skip this step
else include the service provider to you providers array in `config/app.php`.

```php
'providers' => [
    Kodjunkie\AutoHelper\AutoHelperServiceProvider::class,
];
```

Then run `php artisan vendor:publish`
that will generate the configuration file `config/auto-helper.php` which holds the path where you would like to keep 
your helper classes / functions.

## How to change default path

You can change it directly from the configuration file `config/auto-helper.php` OR add `HELPER_PATH=Your path` to your
 `.env` file.
