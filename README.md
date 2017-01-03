# auto-helper
Easily add helper functions and classes to your laravel project.

## Installation

First, pull in the package through Composer.

Run `composer require paplow/auto-helper`

And then, if using Laravel 5, include the service provider within `config/app.php`.

```php
'providers' => [
    Paplow\AutoHelper\AutoHelperServiceProvider::class,
];
```

Then Run `php artisan vendor:publish`.

That will generate the configuration file `config/auto-helper` which holds the path where you would like to keeps your helper classes / functions.

## How to change default path

You can change it directly from the configuration file

OR

Add `HELPER_PATH=Your path` to your .env file.
