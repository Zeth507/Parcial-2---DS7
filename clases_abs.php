<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<title>Parcial 2</title>
	<link rel="stylesheet" href="act4.css">
    <script src="jquery-3.6.1.js"> </script>
</head>


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

/* class Pizza extends Consumable {
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
     
}  */



class Health extends Consumable {
   // Declaramos los atributos:
   public $hp_actual;
   public $hp_mayor;
  
   // Constructor:
   public function __construct($hp_actual, $hp_mayor){
    $this->hp_mayor = "10";
    $this->hp_actual = "10";

   } 
    
   public function hp_a(){  

      return $this->hp_actual = $hp_actual;   } 
} 


$name = $_POST["name"];
echo " Vida Actual:  <br>

El nombre de tu jugador es $name y un Goblin con 5 de vida se acerca a atacarte, con que arma deseas contraatacar? <br>";
?>
<form id="formulario" method="post">
<input type="hidden" id="arma" name="arma" value="sword">
    <button type="button" id="sword">Espada</button>
    <button type="button" id="bow">Arco</button><br><br>
</form>

<!-- Ajax para Atacar!-->
<script>
$("#sword").click(function(){
    $.ajax({
        url: "armas.php",
        type: "post",
        data: $("#formulario").serialize(),
        success: function(resultado){
            $("#resultado").html(resultado);
        }
    });
});
</script>

<script>
$("#bow").click(function(){
    $.ajax({
        url: "armas.php",
        type: "post",
        data: $("#formulario").serialize(),
        success: function(resultado){
            $("#resultado").html(resultado);
        }
    });
});
</script>















 