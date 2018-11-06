# ak-Session

[![AUR license](https://img.shields.io/aur/license/:package.svg)](https://github.com/aminelch/akSession/blob/master/licence.md)
![PHP version from PHP-Eye](https://img.shields.io/php-eye/symfony/symfony.svg?style=plastic)
 

A simple PHP package , Provides session management functionality.


## Installation Process

Just copy Session folder somewhere into your project directory. Then include session autoloader.

     require_once('/path/to/ak-session/autoload.php');
Session is also available via Composer/Packagist.

    composer require aminelch/ak-session
 
## All Methods
 

Load a new and unique instance from Session 

    $session=Session::getInstance();

Gets datas from the session.

    $session->get($key);
    
Stores datas in the session.

	 $session->set($key, $value);

Delete specific key.

	 $session->unset($key);

## Licence