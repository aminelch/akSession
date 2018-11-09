# ak-Session

![PHP version from PHP-Eye](https://img.shields.io/php-eye/symfony/symfony.svg)
 
![GitHub last commit](https://img.shields.io/github/last-commit/google/skia.svg)


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
The MIT License (MIT)
This package was written by Amine L'ch <aminelch95@gmail.com> <aminelch@ubuntu.com>

