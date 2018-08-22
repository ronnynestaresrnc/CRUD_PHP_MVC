<?php 
    class View {

    protected $view_file;
    protected $view_data;

    public function __construct($view_file,$view_data){

	   $this->view_file = $view_file;
	   $this->view_data = $view_data;
	   }

	public function  render(){

	 if(file_exists(VIEW.$this->view_file.".php")){

   
	   require VIEW.$this->view_file.'.php';

     }else{
   
       echo "TEMPLATE HEADER NO EXISTE";
	 }


     }

    public function make($view){
     if(file_exists(VIEW.$view.".php")){
     
       require VIEW.$view.'.php';
     }
    }
    public function obtenerTemplate($nombreTemplate){
  $direccionArchivo = VIEW.$nombreTemplate.'.php';
  if (file_exists ($direccionArchivo)) {


     
      $data = array('home' => 'SIMPLE CRUD','new' => 'ADD USER'); 

   
  $HTML = str_replace('{title}', $data['home'], file_get_contents($direccionArchivo));
echo $HTML;echo "{title}";
    }
  
}
public function ver($f){

 
}


 }
 ?>
