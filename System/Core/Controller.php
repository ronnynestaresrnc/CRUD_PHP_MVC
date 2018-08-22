<?php 
class Controller {
	protected $view;
	protected $model;
	protected $controller;
	protected $method;
	protected $param;
	
	public function __construct(Router $r){

      $this->controller = $r->getController();
      $this->method = $r->getMethod();
      $this->param = $r->getParam();
	    $this->run();
	}
	public function run(){

      $router = new Router();
     
  
  if((!class_exists($this->controller)) or (!method_exists($this->controller,$this->method))){
        require VIEW.'error404.php';
        return true;
  }
  $this->controller = new $this->controller;
  return call_user_func_array([$this->controller,$this->method],$this->param);
}



  public function Model($modelname){
   if(file_exists(MODEL.$modelname.".php")){
     require MODEL.$modelname.".php";
    return $this->model = new $modelname;}
  }



  public function View($viewname){
   
   if(file_exists(VIEW.$viewname.".php")) {
     require VIEW.$viewname.".php";
     return;
   }
  }


    




} 

?>