<?php 

include_once 'classes/person.php';
include 'classes/Programmer.php';

spl_autoload_register(function ($class){
  require_once 'classes/' . $class . '.php';
});




// require 'classes/tt.php';
// require_once
// include 'classes/tt.php';


// echo "Hoi from index:)";

$person1 = new Person('Atwa-ICT','Academy');
// $person1->firstname = "ICT Academy";
// echo $person1->getFirstName();
// var_dump($person1->setFirstName("ICT Academy"));

$newpen = new Pen();
$newpen->showH1Red($person1->firstname);


// echo $person1->getFirstName();

// $person1->sayHi();

 $pro = new Programmer();
  // $pro->show();

  $newpen->showH1Red(
    $pro->show()
  );

$pro->age =  30;
// $pro->showRed();
// echo $pro->age;

 ?>