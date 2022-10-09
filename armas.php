<?php

abstract class Weapon {
  
    // Metodo para calcular y devolver el area
    abstract protected function points_attack($p_attack);
    }

   class Sword extends Weapon {

    // Constructor:
    public function __construct($p_attack = 5, $name_weapon1 = "Espada"){
    $this->p_attack = $p_attack;
    $this->name_weapon1 = $name_weapon1;
   } 

    // Declaramos los atributos:
    public function getP_attack(){
        return $this->p_attack;
   }

   public function getName_weapon1(){
    return $this->name_weapon1;
}

 public function points_attack(){  
    $this->resultado =  $p_attack * 2; 
   return $this->resultado;
} 
}

$arma = $_POST["arma"]; 
if($arma == 'sword'){
   $sword = New Sword($p_attack);
   $respuesta = $sword->points_attack();
echo "Atacaste a un Goblin con una $p_attack y le causaste $respuesta de dano";
}
   else {
       
   }

?>

