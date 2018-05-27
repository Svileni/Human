<?php
    
class Human {
    
    //Definisanje clanova klase
    
    private $first_name;
    private $last_name;
    private $gender;
    private $age;
    private $hear_color;
    private $eye_color;
    private $occupation;
    
    //Konstruktor
    
    public function __construct($first_name, $last_name, $gender, $age, $hear_color, $eye_color, $occupation){  
    
        $this->first_name   = $first_name;
        $this->last_name    = $last_name;
        $this->gender       = $gender;
        $this->age          = $age;
        $this->hear_color   = $hear_color;
        $this->eye_color    = $eye_color;
        $this->occupation   = $occupation;
    }
    
    
    //Metodi
    public function getFirstName(){
        return $this->first_name;
    }
    
     public function getLastName(){
        return $this->last_name;
    }
    
     public function getGender(){
        return $this->gender;
    }
    
     public function getAge(){
        return $this->age;
    }
    
     public function getHearColor(){
        return $this->hear_color;
    }
    
     public function getEyeColor(){
        return $this->eye_color;
    }
    
     public function getOccupation(){
        return $this->occupation;
    }
        
}

?>

