# ak-Session

A simple PHP package , Provides session management functionality.
 
 
![php tested](https://img.shields.io/badge/php%20tested-7.2.1-blue.svg)    	    	   ![GitHub](https://img.shields.io/github/license/mashape/apistatus.svg) 	   ![packagist](https://img.shields.io/packagist/v/mnapoli/PHP-DI.svg) 
     

## Requirement 

PHP 5.3 or higher
 
## Installation Process

Just copy Session folder somewhere into your project directory. Then include session autoloader.

     require_once('/path/to/ak-session/autoload.php');
Session is also available via Composer/Packagist.

    composer require aminelch/ak-session
 
## All Methods
 

Load a new and unique instance from Session 

    $session=Session::init();

Gets datas from the session.

    $session->get($key);
    
Stores datas in the session.

	 $session->set($key, $value);

Delete specific key.

	 $session->unset($key);

Gets all data stored in session.

	 $session->getAll();

Destroys all data registered to a session

	 $session->destroy();
	 
## Contribution

Please create issue first if you're planning to contribute.
for more informations, check the [contributing](https://github.com/aminelch/akSession/blob/master/CONTRIBUTING) file
## Licence

[![Packagist](https://img.shields.io/packagist/l/doctrine/orm.svg)](https://github.com/aminelch/akSession/blob/master/LICENSE.md)




