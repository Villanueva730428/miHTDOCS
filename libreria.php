<?php

//public - the property or method can be accessed from everywhere. This is default
//protected - the property or method can be accessed within the class and by classes derived from that class
//private - the property or method can ONLY be accessed within the class

class Fruta
{
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

class FrutaConConstructor {
    public $name;
    public $color;
  
    function __construct($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }

  class FrutaConHerencia {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function descripcion() {
      echo "La fruta es {$this->name} y es de color  {$this->color}.";
    }
  }
  
  // Strawberry is inherited from Fruit
  class Fresa extends FrutaConHerencia {
    public function mensaje() {
      echo "Soy una fruta y soy una fresa ";
    }
  }

  class ListaDeAutos{
    public function marcas(){
        $cars = array("Volvo", "BMW", "Toyota");
        foreach($cars as $car){
            echo "$car <br>";
        }
    }
  }
  
  