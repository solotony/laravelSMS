# Description

A Laraval Package to send sms messages via smsint.ru.
 
May be in future...


## Table of Contents

- [Features and Requirements](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Defining new gateways](#gateways)
- [License](#License)
- [Essentials](#essentials)

## Features & Requirements

* Supports sending messages directly
* Supports sending messages at a certain date/time
* Supports sending messages to multiple numbers at once
* Supports multiple number formats see [Usage](#usage)
* Support using multiple gateways and sender names at the same time.
* Requires an active account with any sms gateway.
* Supports Laravel 5.*
* cURL 
* php >=7.1.0


## Installation

Install with composer by running  `composer require solotony/laravelsms:dev-master`  
Composer will download and install the package. if you are using Laravel > 5.5 go directly to [Config](#config)
**if you are using laravel < 5.4 ONLY**
open `config/app.php` and add the service provider and alias as below:

    'providers' => array(
        ...
        solotony\laravelsms\SmsProvider::class,
    ),
    .
    .
    .
    'aliases' => array(
        ...
        'SMS'    => solotony\laravelsms\SMS::class,
    ),

### config

Publish the configuration file by running the following Artisan command.

```php
$ php artisan vendor:publish --provider="solotony\laravelsms\SmsProvider"
```
Finally, you need to edit the configuration file at  `config/sms.php` with your own gateway info. Also you need to set your default Gateway at the top of the config file.


### usage


## License

some code by abdullahobaid used for template

smsint code used ib module 

## Essentials
* [Laravel](https://laravel.com)

