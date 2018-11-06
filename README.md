# ak-Session

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