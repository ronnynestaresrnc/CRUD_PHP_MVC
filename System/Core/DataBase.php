<?php 
class DataBase{
	protected $host ="localhost";
	protected $user = "id6453247_wp_ffe36c96f2a1bb528ff57b121b30c9b2";
	protected $pass ="palabras123";
	protected $name = "id6453247_wp_ffe36c96f2a1bb528ff57b121b30c9b2";
	protected $conexion;
	

	 public function conexion(){
		$this->conexion = new mysqli ($this->host,$this->user,$this->pass,$this->name);
		
	return $this->conexion;
		
	}




}


 ?>