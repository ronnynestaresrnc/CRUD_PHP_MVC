<?php 
class newController extends Controller {

	protected $model;

	public  function __construct(){

     $this->model = $this->model('user');
	 $this->View('header');
     $this->View('new');
	
		

	}

	  function index(){
	 
      
   

	}
	function save(){

	 $this->model->setNombre($_POST['nombre']);
	 $this->model->setApellido($_POST['apellido']);
	 $this->model->setEmail($_POST['email']);
	 $this->model->setDni($_POST['dni']);
	 $this->model->setEdad($_POST['edad']);
	 $this->model->setCiudad($_POST['ciudad']);
	 $this->model->Insertar();
	
	}
	function ver(){

		echo "ver";
	}




}

 ?>