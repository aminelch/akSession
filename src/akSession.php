<?php
/**
*
* A simple PHP package , Provides session management functionality.
*
* @package akSession
* @subpackage -
* @version 1.0 
* @author Amine L'ch  
* @url https://github.com/aminelch/aksession 
* @copyright MIT
*
*/
class akSession
{
    /**
    * @var store the actual instance 
    */
    private static $_instance=null;
    
    /** No need to call the constructor,coz we need just a single instance */
    private function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) session_start();
        var_dump("Instance created with id:". uniqid());
    }
    /**
    * Return a single instance
    * @return object
    */
    public static function getInstance(): akSession
    {
        var_dump("instance called");
        
        if (is_null(self::$_instance)) self::$_instance = new akSession();
        return self::$_instance;
        
    }
    
    /**
    *    Gets datas from the session.
    *    Example: Session->get($key);
    *
    * @param    key    Name of the datas to get.
    * @return    mixed    Datas stored in session or null if key doesn't exist.
    **/
    
    public function get($key)
    {
        // return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
        if(array_key_exists($key, $_SESSION)) {
            return $_SESSION[$key];
        }
        else {
            return ""; 
        }
        
        
    }
    
    /**
    *    Stores datas in the session.
    *    Example: $session->set ('user','aminelch');
    *
    * @param    key    key of the datas.
    * @param    value    Your datas.
    * @return    void
    **/
    
    public function set($key, $value):void
    {
        $_SESSION[$key] = $value;
    }
    
    /**
    *    Delete specific key from session.
    *    Example: $Session->unset ('user');
    *
    * @param    key    key of the datas.
    * @return   void
    **/
    
    
    public function unset($key):void
    {
        if (array_key_exists($key, $_SESSION)) {
            unset($_SESSION[$key]);
        }
    }
}
