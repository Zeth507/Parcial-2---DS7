<?php abstract class Monster {
  
  // Constructor para caracteristicas default de monstruos
  public function __construct($hpMax, $weapon, $name){
    $this->hpMax = $hpMax;
    $this->weapon = $weapon;
    $this->name = $name;
    $this->hpActual = $hpMax;

    public function getAttackPoints(){
        return $this->weapon = $weapon;
   }

   public function recibirDamage(){
    return $this->weapon = $weapon;
}
} 
  }

  class Goblin extends Monster {
    // Declaramos los atributos:

    public function hpMax(){
        return $this->hpMax = 5;
   }

    public function weapon(){  
        return $this->weapon = "Espada";
    } 

    public function name(){  
        return $this->name = "Goblin";
    } 
}

class Jugador extends Monster {
    // Declaramos los atributos:

    public function hpMax(){
        return $this->hpMax = 10;
   }

    public function weapon(){  
        return $this->weapon = "Espada";
    } 

    public function name(){  
        return $this->name = "Nombre";
    } 
}

  ?>