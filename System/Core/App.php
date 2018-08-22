<?php 
class App  {
  protected $model;
	
	 public function __construct(){
		$this->run();

    }

	 public function run(){

$router = new Router();
$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();
  
  if((!class_exists($controller)) or (!method_exists($controller,$method))){
        require 'App/View/error404.php';
        return true;
  }
  $controller = new $controller;
  return call_user_func_array([$controller,$method],$param);
}
  public function Model($modelname)
  {
    if (file_exists("App/Model/".$modelname.".php")) {
     require "App/Model/".$modelname.".php";
     $this->model = new $modelname;
    }


  }


}

 ?>








