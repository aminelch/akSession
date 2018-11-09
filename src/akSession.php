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
    public $keys=[];
    public function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) session_start();
        var_dump(uniqid());
}
    /**
     * Return a single instance
     * @return object
     */
    public static function getInstance(): object
    {

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

    public function get($key):string
    {
        // return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
        return $this->key([$key]);

    }

    /**
     *    Stores datas in the session.
     *    Example: Session->set ('user','aminelch');
     *
     * @param    key    key of the datas.
     * @param    value    Your datas.
     * @return    void
     **/

    public function set($key, $value):void
    {
       $_SESSION[$key] = $value;
       // $this->key[$key]=$value;
    }

    /**
     *    Stores datas in the session.
     *    Example: Session->unset ('user');
     *
     * @param    key    key of the datas.
     * @param    value    Your datas.
     * @return    void
     **/


    public function unset($key):void
    {
        if (array_key_exists($key, $_SESSION)) {
            unset($_SESSION[$key]);
        }
    }
}
