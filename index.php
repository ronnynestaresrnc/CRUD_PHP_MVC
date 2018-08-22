<?php 
ini_set("display_errors", 1);

require 'App/config.php';
require 'System/Core/Autoload.php';
require 'App/Controller/homeController.php';
require 'App/Controller/newController.php';
$r= new Router;
new Controller($r);


  
 ?>
 
        
