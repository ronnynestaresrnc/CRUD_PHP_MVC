<?php 
class Helper{
	
	function __construct()
	{
	
	}

	function ErrorController($controller){
		
     if(!file_exists("App/Controller/".$controller.".php")){
      $controller = 'error404';
       View::ViewError($controller);
       //require "App/View/error404/".$controller.".php";

      return false;
	   }else{
		//require "App/Controller/".$controller.".php";
		return $controller;
	 }

	}


 function validateMethodController($controller, $method) {
    if(!method_exists($controller, $method)){
   
    }else{
  	echo "existe MEtodo";
  }





}
}

 ?>