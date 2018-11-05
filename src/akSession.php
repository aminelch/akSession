<?php

class Session
{
    /**
     * @var stocke l'instance actuelle
     */
    private static $_instance;

    public function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    }

    /**
     * RETOURNE une seule instance de la classe
     * @return object
     */
    public static function getInstance(): object
    {

        if (is_null(self::$_instance)) self::$_instance = new Session();
        return self::$_instance;

    }

    /**
     *    Gets datas from the session.
     *    Example: echo session__get($key);
     *
     * @param    key    Name of the datas to get.
     * @return    mixed    Datas stored in session or null if key doesn't exist.
     **/

    public function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;

    }

    /**
     *    Stores datas in the session.
     *    Example: session__set ('user','amine');
     *
     * @param    key    key of the datas.
     * @param    value    Your datas.
     * @return    void
     **/

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }


    public function unset($key)
    {
        if (array_key_exists($key, $_SESSION)) {
            unset($_SESSION[$key]);
        }
    }

}
