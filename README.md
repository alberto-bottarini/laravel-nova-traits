# Laravel Nova Traits
This package contains a set of useful Laravel Nova Traits for your Resources.

## Installation
```shell
composer install alberto-bottarini/laravel-nova-traits
```

## Usage
Usage is super simple, just import traits in your Resource and use them.

```php
use AlbertoBottarini\LaravelNovaTraits\HiddenFromNavigation;

class MyResource extends Resource 
{
    use HiddenFromNavigation;
}
```

## Available Traits

- **HiddenFromNavigation**: Remove resource from navigation bar


