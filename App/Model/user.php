<?php 
class user extends DataBase{
	protected $nombre;
	protected $apellido;
	protected $email;
	protected $ciudad;
	protected $dni;
	protected $edad;
	public $conexion;

    public function __construct()
	{
	$this->conexion = $this->conexion();	
	}
	public function setNombre(){
	$this->nombre = $_POST['nombre'];
	}
	public function setApellido(){
    $this->apellido = $_POST['apellido'];
	}
	public function setEmail(){
	$this->email = $_POST['email'];	
	}
	public function setCiudad(){
	$this->ciudad = $_POST['ciudad'];
	}
	public function setDni(){
	$this->dni = $_POST['dni'];
	}
	public function setEdad(){
	$this->edad = $_POST['edad'];
	}
	public function Insertar(){

     $query = "INSERT INTO Usuarios (Nombre,Apellido,Email,Ciudad,Dni,Edad) VALUES ('$this->nombre','$this->apellido','$this->email','$this->ciudad',$this->dni,$this->edad) ";
     if ($this->conexion->query($query)) {
		echo "SE RELIZO CON EXITO";

	 }else{
		echo "NO SE PUEDO EJECUTAR";

	 }

	}

	public function mostrar(){
		$limit = 6;
		$query = "SELECT * FROM  Usuarios LIMIT $limit";
	 if ($resultado = $this->conexion->query($query)) {
		while ($reg = mysqli_fetch_array($resultado)){


    echo "<tr>
    <td><input type=checkbox name=></td>
    <td>$reg[0]</td>
    <td>$reg[1]</td>
    <td>$reg[2]</td>
    <td>$reg[3]</td>
    <td>$reg[4]</td>
    <td>$reg[5]</td>

    </tr> "; 
   
}

	 }else{
		echo "NO SE PUEDO EJECUTAR";
	 }
		
}







}

 ?>