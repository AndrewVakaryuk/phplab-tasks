<?php

class Request
{
    public $query;
    public $post;
    public $server;
    public $cookies;
    public $session;

    public function __construct()
    {
        $this->query = $_GET;
        $this->post = $_POST;
        $this->server = $_SERVER;
        $this->cookies = $_COOKIE;
        $this->session = $_SESSION;
    }
    public function query($key, $default = null)
    {
        return (array_key_exists($key, $this->query) ? $this->query[$key] : $default);
    }
    public function post($key, $default = null)
    {
        return (array_key_exists($key, $this->post) ? $this->post[$key] : $default);
    }
    public function get($key, $default = null)
    {
        if (!empty($this->query($key)) and !empty($this->post($key))){
            return $this->post($key);
        } else if (!empty($this->query($key)) and empty($this->post($key))){
            return $this->query($key);
        } else if (empty($this->query($key)) and !empty($this->post($key))){
            return $this->post($key);
        } else {
            return $default;
        }
    }
    public function all(array $only = [])
    {
        return (empty($only) ? array_merge($this->query, $this->post) : array_keys($only));
    }
    public function has($key)
    {
        return  array_key_exists($key, $this->all());
    }
    public function ip()
    {
        return $this->server['REMOTE_ADDR'] ;
    }
    public function userAgent()
    {
        return $this->server['HTTP_USER_AGENT'];
    }
    public function cookies()
    {
        return $this->cookies;
    }
    public function session()
    {
        return $this->session;
    }
}