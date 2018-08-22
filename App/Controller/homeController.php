<?php 
class HomeController extends Controller{
    protected $model;


	function __construct(){

     $this->model = $this->model('user');

     $this->View('header');
     $this->View('home');
	}
    function index()
    {  
     
       $ronny= "dd";

   
    
    }
     function ver(){
       
    	echo "acccion ver";

    }
} 
?>