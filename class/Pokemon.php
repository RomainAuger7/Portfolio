<?php 

class Pokemon{

    private $name;
    private $type;
    private $health;
    private $target;

    //Constructor
    public function __construct(string $name, string $type, int $health)
    {
        $this->name = $name;
        $this->type = $type;    
        $this->health = $health;
    }

    //Function to handle pokemon attack
    public function attack(Pokemon $target, int $health){
        $target->setHealth($target->getHealth() - $health);
        if ($target->getHealth() <= 0){
            echo $target->getName() . ' is KO !!! </br>';
        }else{
            echo $target->getName() . ' take damage. He as ' . $target->getHealth(). ' health left. </br>';
        }
    }
    
    public function __toString()
    {
        return $this->name . ' is a ' . $this->type . ' pokemon with ' . $this->health . ' health point.';
    }

    //getters and setters
    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getHealth(){
        return $this->health;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function setHealth(int $health){
        $this->health = $health;
    }

}


?>