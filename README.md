# Laravel Nova Traits
This package contains a set of useful Laravel Nova Traits for your Resources.

## Installation
```shell
composer require abottarini/laravel-nova-traits
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

- **HiddenFromNavigation**: Removes resource from navigation bar
- **Uncreatable**: Disables create action for all users
- **Unupdatable**: Disables update action for all users
- **Undeletable**: Disables delete action for all users
- **ReadOnlyResource**: Makes resource read-only (is an alias of Uncreatable + Unupdatable + Undeletable)
- **RedirectToViaResource**: Redirects user to "via" Resource after creating or updating a child Resource


