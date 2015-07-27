<?php 

	class Producto {
		
		public static $distribuidor = "Soy un Distribuidor";

		public $nombre = 'nombre_inicial';
		public $precio = 0;
		public $descripcion ="Descripcion de algo";

		function __construct($nombre="", $precio="", $descripcion=""){
			$this->nombre=$nombre;
			$this->precio=$precio;
			$this->descripcion=$descripcion;
		}

		public function obtenerInfo(){
			return "Nombre del Producto: " . $this->nombre;
		}

		public function obtenerDistribuidor(){
			return self::$distribuidor;
		}

	}

	class Soda extends Producto {
		
		public $sabor;

		function __construct($nombre="", $precio="", $descripcion="", $sabor){
			parent::__construct($nombre, $precio, $descripcion);
			$this->sabor=$sabor;
		}

		public function obtenerInfo(){
			return "Nombre del Producto: " . $this->nombre . " // Sabor: " . $this->sabor;
		} 
	}

	$p= new Producto();
	$camisa= new Producto("Camisa Espacial Blanca Con Rayas Verdes", 200, "Esta es una camisa");
	$soda= new Soda("Cocacola", 20, "Esto es una soda", "cola");

	echo $soda->obtenerDistribuidor();
	echo "</br>";
	echo $camisa->obtenerDistribuidor();
	echo "</br>";
	echo $camisa::$distribuidor;
	echo "</br>";
	echo Producto::$distribuidor;
	//Verificar si un metodo existe dentro de una clase.
	echo "</br>";
	echo method_exists("Producto", "obtenerDistribuidor"); // Verdadero
	echo "</br>";
	echo method_exists("Producto", "nada"); //Falso
	echo "</br>";
	echo method_exists($soda, "obtenerDistribuidor"); // Verdadero
	echo "</br>";
	echo method_exists($camisa, "nada"); //Falso

	//Verificar si una clase es subclase de otra (parent/child).
	echo "</br>";
	echo is_subclass_of($soda, "Producto"); // Verdadero





?>