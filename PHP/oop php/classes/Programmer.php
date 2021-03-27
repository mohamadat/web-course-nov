<?php
include_once "person.php";

class Programmer {
  private $cv = ["js", "css"];
  private $age = 40;
  private $score = 0;


public function __set($name, $value){
  $this->$name = $value;
}


public function __get($name){
  return $this->$name;
}

  function getCV(){
    echo "JS - Python 3- Bootstrap 5";
    // parent::sayHi();
    
  }
  
  public function show(){
    return "{
      name : 'Default name',
      age : '$this->age'
    }";
  }


  public function showRed(){
    echo '<h1 style="color: red;">'.
    $this->age
    
    .'</h1>';
  }

}