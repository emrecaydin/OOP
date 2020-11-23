<?php

class Car {
    private $nbWheels=4;
    public $currentSpeed;
    public $color;
    private $nbSeats;
    private $energy;
    public $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy){

        $this->color=$color;
        $this->nbSeats=$nbSeats;
        $this->energy=$energy;
    }
    
    public function start(){
        $this->currentSpeed=0;
        $this->energyLevel=100;

    }
    public function forward(){
        $this->currentSpeed+=5;
        sleep(1);
        echo "i'm getting faster, my speed is ". $this->currentSpeed. "<br>";
        if ($this->currentSpeed %10==0){
            $this->energyLevel-=5;
            echo "i'm getting lighter, my energy level is ". $this->energyLevel. "<br>";
        }
        if ($this->currentSpeed!=20){
            self::forward();
        }
    }
    public function brake(){
        while ($this->currentSpeed>0){
            $this->currentSpeed--;
           echo "my current speed is discreasing ".$this->currentSpeed. "<br>";
        }
        echo "Finally stopped !";
    }
    public function getNbWheels(){
        return $this->nbWheels;
    }
    public function getCurrentSpeed(){
        return $this->currentSpeed;
    }
    public function getColor(){
        return $this->color;
    }
    public function getNbSeats(){
        return $this->nbSeats;
    }
    public function getEnergy(){
        return $this->energy;
    }
    public function getEnergyLevel(){
        return $this->energyLevel;
    }
}

