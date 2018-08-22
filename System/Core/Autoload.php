<?php
function Autoload ($class){
spl_autoload_register(function ($class) {
if(	file_exists(CORE.$class. '.php'))
{
  return  require CORE.$class . '.php';
}
});

}
spl_autoload_register('Autoload');