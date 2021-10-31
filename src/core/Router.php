<?php

namespace PHPMVC\Core;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Router
{
    public $uri;
    public $controller;
    public $method;
    public $param;

    public function __construct()
    {
        $this->setUri();
        $this->setController();
        $this->setMethod();
        $this->setParam();
    }

    public function setUri()
    {        
        $this->uri = explode('/', $_SERVER['REQUEST_URI']);
        //var_dump($this->uri);
    }

    public function setController()
    {
        $this->controller = $this->uri[2] === '' ? 'Auth' : $this->uri[2];
    }

    public function setMethod()
    {
        $this->method = !empty($this->uri[3]) ? $this->uri[3] : 'index';
        //echo $this->method;
    }

    public function setParam()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
            $this->param = $_POST;
        else if ($_SERVER['REQUEST_METHOD'] === 'GET')
            $this->param = !empty($this->uri[4]) ? $this->uri[4] : '';
    }

    public function getUri()
    {
        return $this->uri;
    }
    public function getController()
    {
        return $this->controller;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function getParam()
    {
        return $this->param;
    }
    //valid controller and method
    public static function validateController($controller)
    {
        if (!is_file('./app/controllers/' . "{$controller}Controller.php"))
            return false;
        return true;
    }
    public static function validateMethodController($controllers, $method)
    {
        if (!method_exists($controllers, $method))
            return false;
        return true;
    }
}
