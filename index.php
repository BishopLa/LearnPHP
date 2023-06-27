<!-- <?php 

$myname = "Olaide Fashina";
$myAge = "45";
$is_valid =true;
$colors =["red", "green","yellow",];

class Person{
    public $name;
    public $age;
    public $occupation;
    public $location;

    public function __construct($name, $age, $occupation, $location){
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
        $this->location = $location;
    }

    public function age(){
        return $this->age;
    }

    public function location(){
        return $this->location;
    }

    public function sayHello() {
        return "Hello, my name is $this->name," ."I am a $this->occupation, " ."My Age is $this->age.";
    }
}

$person= new Person('Olaide Fash', 33, 'Web developer', 'Abeokuta');

echo $person->sayHello();




// echo $myname ." "."is"." ". $myAge;

// echo $is_valid;

echo $colors[0]. " " .$colors[1]. " ". $colors[2];
?>


 -->


<!-- 
<?php

class Food{
   // property
    public $name;
    public $price;
    public $type;

    // constructor
    public function __construct($name, $price, $type) {
        $this->name = $name;
        $this->price =$price;
        $this->type = $type;
}

        //get Food 
        public function myPrice() {
            return $this->price;
        }
        public function getFood() {
            return " The Food type $this->name"." "."is sold at $this->price dollars"." "."and belong to $this->type according to its placement in food classification";
        }
}
// initiating a class

$food  = new Food("Rice", 50, 'Carbohydrate');

echo $food->getFood();

?> -->



<!-- <?php

Class SmartPhone{
public $name;
public $maker;

function get_name($name, $maker) {
    $this->name = $name;
    $this->maker = $maker;
}

function set_name(){
    return $this->name;
    return $this->maker;
}

}

?> -->


<!-- <?php
class Greeting {
    public $Firstgreet;
    public $Secondgreet;

    public function __construct($Firstgreet, $Secondgreet) {
        $this->Firstgreet = $Firstgreet;
        $this->Secondgreet = $Secondgreet;
    }

    public function GreetMeNow() {
        return $this->Firstgreet . $this->Secondgreet;
    }
}

$greet = new Greeting("Good morning. ", "Have a nice day!");

echo $greet->GreetMeNow();

?> -->

</br>

<!-- <?php
$score =100;

if ($score >= 60) {
    echo "Grade: First Division";
} elseif ($score >= 45 && $score < 60) {
    echo "Grade: Second Division";
} elseif ($score >= 33 && $score < 45) {
    echo "Grade: Third Division";
} else {
    echo "Grade: Fail";
}




 $marks =100;
 
switch ($marks) {
case 60 >= 60:
    echo "First Division";
break;
case 40 <= 45:
    echo "Second Division Here";
break; default:
    echo "The value is not 1 or 2";
break;
}


$favfood = "amala";

switch ($favfood) {
  case "red":
    echo "Your favorite food is rice!";
    break;
  case "blue":
    echo "Your favorite food  is beans!";
    break;
  case "green":
    echo "Your favorite food  is yam!";
    break;
  default:
    echo "Get a favorite food today";
}

?> -->




<!-- Loop -->
<!-- The while loop executes a block of code as long as the specified condition is true. -->

<!-- <?php
$value = 1;

while($value <=5) {
  echo "The number is: $value <br>";
  $value++;
}

$age = 50;

while($age <= 100) {
  echo "The number is: $age <br>";
  $age+=5;
}


?>

The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true. -->
<!-- <?php
$students = 7;

do {
  echo "Total student number is: $students <br>";
  $students++;
} while ($students <= 10);


?> -->

<!-- The for loop is used when you know in advance how many times the script should run. -->
<!-- Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
} -->

<!-- <?php
for ($age = 0; $age <= 30; $age+=5 ) {
    echo "The number is: $age <br>";
  }
?> -->



<!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
foreach ($array as $value) {
  code to be executed;
}
For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
 -->

 <!-- <?php
$Food = array("rice", "bread", "yam", "egg", "beans", "fish");

foreach ($Food as $favorites) {
  echo "$favorites <br>";
}


$age = array("Babz"=>"Web Development", "Olaide"=>"Web development", "Samuel"=>"Front End");

foreach($age as $name => $package) {
  echo "$name = $package<br>";
}

?> -->

<!-- The break statement can also be used to jump out of a loop. -->

<!-- <?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?> -->


<!-- The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
 -->

 <!-- <?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?> -->


<?php include_once("./Loop.php") ?>
<?php include_once("./Function.php") ?>
<?php include_once("./Array.php") ?>
