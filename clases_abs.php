<?php

 abstract class Item {
  
  // Metodo para calcular y devolver el area
  abstract protected function reset();
  

 }

 abstract class Consumable {
  
    // Metodo para calcular y devolver el area
    abstract protected function hp_a();    
  public $consumed;
  public $spoiled;

   }

   abstract class Weapon {
  
    // Metodo para calcular y devolver el area
    abstract protected function obtenerArea();
    public $num1;
  
   }

//Extend de Item
   class Jugador extends Item {
    // Declaramos los atributos:
    public $number_item;
    public $id;
    public $value;
    public $name;
    public $weight;
   
    // Constructor:
    public function __construct($number_item, $id, $value, $name, $weight){
     $this->number_item = "0";
     $this->id = "0";
     $this->value = $value;
     $this->name = $name;
     $this->weight = "";
    } 

    public function getid(){
        return $this->id;
   }

   public function getvalue(){
       return $this->value;
    }

    public function getname(){
        return $this->name;
     }

    public function getweight(){
        return $this->weight;
     }


     public function setValue($_value){
        return $this->value = $_value;
     }

     public function setName($_name){
        return $this->name = $_name;
     }

     public function setWeight($_weight){
        return $this->weight = $_weight;
     }
     
    public function reset(){  
        $this->resultado =  ($this->num1 * $this->num2); 
       return $this->resultado;
    } 
}

class Pizza extends Consumable {
    // Declaramos los atributos:
    public $number_slices;
    public $slices_eat;
   
    // Constructor:
    public function __construct($number_slices, $slices_eat){
     $this->number_slices = "12";
     $this->slices_eat = "0";

    } 

    public function getid(){
        return $this->id;
   }

   public function getvalue(){
       return $this->value;
    }

    public function getname(){
        return $this->name;
     }

    public function getweight(){
        return $this->weight;
     }


     public function setValue($_value){
        return $this->value = $_value;
     }

     public function setName($_name){
        return $this->name = $_name;
     }

     public function setWeight($_weight){
        return $this->weight = $_weight;
     }
     
} 

class Health extends Consumable {
   // Declaramos los atributos:
   public $hp_actual;
   public $hp_mayor;
  
   // Constructor:
   public function __construct($hp_actual, $hp_mayor){
    $this->hp_mayor = "10";
    $this->hp_actual = "10";

   } 
    
   public function hp_a($hp_actual){  

      return $this->hp_actual = $hp_actual;   } 
} 


$health = New Health($hp_actual);
    $hp_actual = $health->hp_a();
$name = $_POST["name"];
echo " Vida Actual: $hp_actual <br>

El nombre de tu jugador es $name";


















 ?>