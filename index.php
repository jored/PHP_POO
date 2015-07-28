<?php 
	/*
		Clases: Son una plantilla para la creación de objetos de datos según un modelo predefinido, se utilizan para representar 
		entidades o conceptos. Cada clase es un modelo que define un conjunto de propiedades y métodos apropiados, una colección
		de variables y funciones que operan dichos datos.

		Ejemplos de cuando declarar algun tipo de clase:

		1.- Instanciable:
			 Cuando necesite una clase que pueda ser instanciada o/y heredada.
				Ejm: class miClase {}

		2.- Abstracta:
				Ejm: Abstract  class ClaseAbstracta { Esta clase solo podra ser heredada}

		3.- Heredada:
			 Si se necesita crear una clase cuyo objeto guarda relación con los métodos y propiedades de otra clase.
			 	Ejm: class claseHija extends clasePadre{} 

		4.- Final:
			 Crear una clase que pueda instanciarse pero que no pueda ser heredada por ninguna otra clase.
				Ejm: Final class claseFinal { Esta clase no puede ser heredada.}

		Propiedades: Representan ciertas caracteristicas del objeto en si mismo. Declaracion:
			var propiedadObjeto; => Declaracion basica de una propiedad.
			public propiedadObjeto; => Propiedad publica puede ser accedida desde cualquier parte de la aplicacion.
			private propiedadObjeto; => Propiedad pirvada solo puede ser accedida desde la clase en la cual se definio.
			protected propiedadObjeto; => Solo puede ser accedida por la clase donde es definida y la que heredadn dicha clase.
			public static propiedadObjeto; => Su valor es estatico y no puede ser modificado por lo cual puede ser accedida sin la
			                                  necesidad de instancia un objeto.
		
		Acceso a Variables(Propiedades), dentro de una clase:
			Por lo general si esta no fue definida como estatica se podra acceder de la siguiente forma:
					this->propiedad; =>  THIS hace referencia all objeto mismo seguido de  el nombre de la propiedad.

			Si esta declarada como estatica:
					self::propiedadCLase; => Se coloca el operador de resolucion de ambito "::" anteponiendo la palabra clave
					                          self, hace referencia a la clase misma.
					parent::propiedadClaseMadre; => Se coloca el operador de resolucion de ambito "::" anteponiendo la palabra
					                           clave parent, hace referencia a una clase heredada.

		Acceso a Variables(Propiedades), fuera de una clase:
			Por lo general si esta nno esa definida como estatica se podra acceder de la siguiente forma:
					Objeto->propiedad; =>  Todo esto dependera de la visibilidad de la variable.

			Si esta declarada como estatica:
					clase/Objeto::propiedadCLase; => Se coloca el operador de resolucion de ambito "::" anteponiendo la clase o 
													el objeto,la clase no necesita ser instanciada.
		
		Metodos: 







	*/
	


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
	$camisa= new Producto("Camisa Espacial", 200, "Esta es una camisa Blanca Con Rayas Verdes");
	$soda= new Soda("Soda Naranja", 20, "Esto es una soda", "naranja");

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