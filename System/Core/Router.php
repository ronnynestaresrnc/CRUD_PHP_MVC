<?php

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
   $this->uri = array_slice(explode('/',$_SERVER['REQUEST_URI'] ),1);
  }

  public function setController()
  {
    $this->controller = $this->uri[0] === '' ? 'homeController' : $this->uri[0].'Controller';
  }

  public function setMethod()
  {
    $this->method = !empty($this->uri[1]) ? $this->uri[1] : 'index';
  }

  public function setParam()
  {
   
      $this->param = array_slice($this->uri,2);
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

 
}
