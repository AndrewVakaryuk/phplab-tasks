<?php


class Cookies
{
    public $cookies;

    public function __construct()
    {
        $this->cookies = $_COOKIE;
    }
    public function all(array $only = [])
    {
        return (empty($only) ? $this->cookies : array_keys($only));
    }
    public  function get($key, $default = null)
    {
        return (!empty($key) ? $this->cookies[$key] : $default);
    }
    public function set($key, $value)
    {
        return setcookie($key, $value);
    }
    public function has($key)
    {
        return (in_array($key, $this->cookies));
    }
    public function remove($key)
    {
        return setcookie($key, '', -3600);
    }
}