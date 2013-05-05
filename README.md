Laravel Buzz Bundle
============

[Buzz](https://github.com/kriswallsmith/Buzz) is a lightweight PHP 5.3 library for issuing HTTP requests. This bundle simply wraps the Buzz library.

## Installation

You can install this bundle by running the following CLI command:

```php
$php artisan bundle:install buzz
```

## Bundle Registration

Add the following to your application/bundles.php file:

```php
'buzz' => array(
    'auto' => true,
),
```

## Example Usage

More infomation about how to use Buzz [can be found here](https://github.com/kriswallsmith/Buzz).