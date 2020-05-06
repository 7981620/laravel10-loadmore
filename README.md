# A `LOADMORE` Trait for Laravel Pagination

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mohamedsabil83/laravel-loadmore.svg?style=flat-square)](https://packagist.org/packages/mohamedsabil83/laravel-loadmore)
[![Build Status](https://img.shields.io/travis/mohamedsabil83/laravel-loadmore/master.svg?style=flat-square)](https://travis-ci.org/mohamedsabil83/laravel-loadmore)
[![Quality Score](https://img.shields.io/scrutinizer/g/mohamedsabil83/laravel-loadmore.svg?style=flat-square)](https://scrutinizer-ci.com/g/mohamedsabil83/laravel-loadmore)
[![Total Downloads](https://img.shields.io/packagist/dt/mohamedsabil83/laravel-loadmore.svg?style=flat-square)](https://packagist.org/packages/mohamedsabil83/laravel-loadmore)

A trait for Laravel 5.8+ pagination that allows you to retrieve an initial number of items in the first page and a different number of items on subsequent pages.

## Installation

You can install the package via composer:

```bash
composer require mohamedsabil83/laravel-loadmore
```

## Usage

Once installed, you can import it into your eloquent model like following:

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mohamedsabil83\LaravelLoadmore\Loadmore;

class Blog extends Model
{
    use Loadmore;
}
```

Then you can use it, e.g. in your controller, like this:

```php
// This is the default, 4 items on the first page and 16 items per subsequence page.
Blog::loadmore();

// 6 items on the first page and 16 items per subsequence page
Blog::loadmore(6);

// 6 items on the first page and 20 items per subsequence page
Blog::loadmore(6, 20);
```

### Testing

```bash
Soon
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email me@mohamedsabil83.com instead of using the issue tracker.

## Credits

-   [Mohamed Sabil](https://github.com/mohamedsabil83)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
