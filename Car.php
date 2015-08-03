<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;

 function __construct($make_model, $price = null, $miles)
 {
   $this->make_model = $make_model;
   $this->price = $price;
   $this->miles = $miles;

   if (is_null($price)){
       $this->price = 50000;
     }
 }
 }
$porsche = new Car("2014 Porsche 911", null, 114991);
//$porsche->make_model = "2014 Porsche 911";
//$porsche->price = 114991;
//$porsche->miles = 7864;

$ford = new Car("2001 Ford", 55995, 14241);
/*$ford->make_model = "2011 Ford F450";
$ford->price = 55995;
$ford->miles = 14241;*/

$lexus = new Car("2013 Lexus RX 350", 44700, 20000);
/*$lexus->make_model = "2013 Lexus RX 350";
$lexus->price = 44700;
$lexus->miles = 20000;*/

$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);
/*$mercedes->make_model = "Mercedes Benz CLS550";
$mercedes->price = 39900;
$mercedes->miles = 37979;*/

$cars = array($porsche, $ford, $lexus,$mercedes);


$cars_matching_search = array();
foreach ($cars as $car) {
  if ($car->price < $_GET["price"]){
      array_push($cars_matching_search, $car);
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
      <?php
        foreach ($cars_matching_search as $car) {
          echo "<li> $car->make_model </li>";
          echo "<ul>";
            echo "<li> $$car->price</li>";
            echo "<li> Miles: $car->miles </li>";
          echo "</ul>";

        }
      ?>
    </ul>
</body>
</html>
