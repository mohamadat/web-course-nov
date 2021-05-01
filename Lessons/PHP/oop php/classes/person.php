<?php


class Person{
  public $firstname = "Atwa-ICT";
  private $lastname;
  protected $gender;


  public function getFirstName(){
    return '<h1>My First name is: ' .$this->firstname .
    '</h1>'
    ;
  }

  public function setFirstName($fname){
   try {
    $this->firstname = $fname;
    return $this->firstname;
   } catch (\Throwable $th) {
    return false;
   }
  }


  public function __construct($fname, $lname){
    $this->firstname = $fname;
    $this->lastname = $lname;
  }
  protected function sayHi(){
    echo "Hi From a Person";
  }


  function talk(){
    echo "we will start now";
    sayHi();
  }

}


