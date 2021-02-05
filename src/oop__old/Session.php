<?php


class Session
{
    public $session;

    public function __construct()
    {
        $this->session = $_SESSION;
    }
    public function all(array $only = [])
    {
        return (empty($only) ? $this->session : array_keys($only));
    }
    public function get($key, $default = null)
    {
        return (!empty($key) ? $this->session[$key] : $default);
    }
    public function set($key, $value)
    {
        return $this->session[$key] = $value;
    }
    public  function has($key)
    {
        return in_array($key, $this->session);
    }
    public function remove($key)
    {
        unset($this->session[$key]);
    }
    public function clear()
    {
        session_unset();
    }
}