<?php 
declare(strict_types=1);
$cars=["BMW"=>"Germany","Mercedes"=>"Germany","Toyota"=>"Japan","Honda"=>"Japan","Ford"=>"USA"];
echo "<pre>";
print_r($cars);
echo $cars["BMW"];
echo "</pre>";
$numbers=[1,2,3,4,5];
//===========================================================
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);
echo "<pre>";
print_r(array_column($a,  'id','first_name'));
echo "</pre>";
////////////////////////
$cars=["BMW"=>"Germany","Mercedes"=>"Germany","Toyota"=>"Japan","Honda"=>"Japan","Ford"=>"USA"];
echo "<pre>";
print_r(array_combine(array_keys($cars), array_values($cars)));
/////////////////////////////////////////////////////////////
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

print_r(array_diff($a1,$a2));
//////////////////////////////////////////////
/*$grades = array_fill("ali", 5, 0);
print_r($grades);*/
///////////////////////////
$grades = [
  "ali" => 0
  ];
  print_r($grades);
//////////////////////////
// array_replace 
$a1=array("a"=> "youssef","b"=> "john","c"=> "ali");
$a2=array("a"=> "ahmed","b"=> "mohamed");
print_r(array_replace($a1, $a2));
//array_walk 
$a=array("a"=>"red","b"=>"green","c"=>"blue");
function myfunction(string $value,string $key):void
{
  $value = "$key: $value";
}
array_walk($a, 'myfunction');
print_r($a);
//array_sort
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
  echo "$key = $val\n";
} 
// want arsort
echo "<br>===============================<br>";
arsort($fruits);
foreach ($fruits as $key => $val) {
  echo "$key = $val\n";
  }
  /////////////////////////////////////
  // want add 100 to all prices
  $prices=[100,200,300,400,500];
  $prices = array_map(function($price) {
    return $price + 100;
  }, $prices);
  print_r($prices);
  $prices = array_map(fn($price) => $price + 100, $prices);
  print_r($prices);
  