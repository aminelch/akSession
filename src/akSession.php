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
 * see
 * @example https://github.com/aminelch/aksession/demo.php
 */
class akSession
{
    /**
     * @var $_instance store the actual instance
     */
    private static $_instance = null;

    public const SESSION_DISABLED = "SESSION_DISABLED";
    public const SESSION_NONE = "SESSION_NONE";
    public const SESSION_ACTIVE = "SESSION_ACTIVE";

    /** No need to call the constructor,coz we need just a single instance */
    private function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) session_start();
            //var_dump("Instance created with id:" . uniqid());
    }

    /**
     * Return a single instance and initialize the obj
     * @return akSession object
     */
    public static function init(): akSession
    {
        //var_dump("instance called");

        if (is_null(self::$_instance)) self::$_instance = new akSession();
        return self::$_instance;

    }

    /**
     *    Gets data from the session.
     *    Example: Session->get($key);
     *
     * @param  string $key Name of the datas to get.
     * @return mixed  Data stored in session or null if key doesn't exist.
     **/

    public function get(string $key): ?string
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
//        if (array_key_exists($key, $_SESSION)) {
//            return $_SESSION[$key];
//        } else {
//            return null;
//        }


    }


    /**
     *    Gets all data stored .
     *    Example: Session->getAll();
     *
     *@return array|null
     */
    public function getAll(): ?array
    {
        return $_SESSION;
    }

    /**
     *    Stores data in the session.
     *    Example: $session->set ('user','aminelch');
     *
     * @param string $key key of the data.
     * @param string $value Your data.
     * @return void
     **/

    public function set(string $key, string $value): void
    {
        $_SESSION[$key] = $value;
    }

    /**
     *    Delete specific key from session.
     *    Example: $Session->unset ('user');
     *
     * @param  string $key  key of the data.
     * @return void
     **/


    public function unset(string $key): void
    {
        if (array_key_exists($key, $_SESSION)) {
            unset($_SESSION[$key]);
        }else {
            throw new OutOfRangeException($key." doesn't exist");
        }
    }

    /**
     *     Destroys all data registered to a session
     *     Example: $Session->destroy();
     */
    public function destroy(): void
    {
        session_destroy();

    }


    /**
     * @return int the session status
     */
    public function getStatus(): int
    {
        return session_status();
    }

}
