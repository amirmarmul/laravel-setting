# Laravel Setting

A simple settings manager for laravel

## Installation

You can install the package via composer:

```bash
composer require kcdev/laravel-setting
```

You need to publish and run the migration:
```bash
php artisan vendor:publish --provider="Kcdev\Setting\SettingServiceProvider"
php artisan migrate
```

## Usage

You can set some key using Facade:

```php
use Setting;

// Get setting
Setting::get('someKey');

// Get setting, with a default fallback value if the key doesn't exist
Setting::get('yourKey', 'Default value');

// Set setting
Setting::set('yourKey', 'yourValue');

// Remove setting
Setting::remove('yourKey');

// Check the setting exists
Setting::exists('yourKey');
```

### Console

It is also possible to set setting within the console:

```bash
php artisan option:set {yourKey} {yourValue}
```

### Security

If you discover any security related issues, please email amiruddinmarmul@gmail.com instead of using the issue tracker.

## Credits

- [Amir Marmul](https://github.com/amirmarmul)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
