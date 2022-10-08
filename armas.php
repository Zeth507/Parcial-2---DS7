<?php

abstract class Weapon {
  
    // Metodo para calcular y devolver el area
    abstract protected function getAttackPoints();
    public $p_weapon;
    public $name_weapon1;
    public $name_weapon2;
    }

   class Sword extends Weapon {

    // Constructor:
    public function __construct($p_weapon = 5, $name_weapon1 = "Espada", $name_weapon2 = ""){
    $this->p_weapon = $p_weapon;
    $this->name_weapon1 = $name_weapon1;
    $this->name_weapon2 = $name_weapon2;

   } 

    // Declaramos los atributos:
    public function getAttackPoints(){  
        return $this->p_weapon;
    } 

    public function nameWeapon(){  
        return $this->name_weapon1;    } 

}

$arma = $_POST["arma"]; 
if($arma == 'sword'){
   $sword = New Sword($p_weapon,$name_weapon1);
   $respuesta = $sword->getAttackPoints();
echo "Atacaste a un Goblin con una $name_weapon1 y le causaste $respuesta de dano";
}
   else {
       
   }

?>

