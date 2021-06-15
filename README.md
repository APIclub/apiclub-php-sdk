APICLUB PHP SDK
=======================


## Installation

The recommended way to install this library is through
[Composer](http://getcomposer.org).

```bash
composer require apiclub/php-sdk
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

 ## Usage

1 Vehicle Information

 ```php
 use Apiclub\Api;
 $api = new Api("<your api key>");
 $response = $api->vehicle_info('MH01XXXXXX');
 ```

### License

This project is licensed under the MIT License
