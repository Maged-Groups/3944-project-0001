<?php
declare(strict_types=1);

for($i=1;$i<=20;$i++){
    var_dump($i);
}

for($i=10;$i>=1;$i--){
    var_dump($i);
}

$sum=0;
for($i=1;$i<=100;$i++){
    $sum+=$i;  
}
var_dump($sum);

$i=1;
while($i<=30){
    if($i%2==0) var_dump($i);
    $i++;
}

$i=5;
while($i<=50){
    var_dump($i);
    $i+=5;
}

$i=1;
do{
    var_dump($i);
    $i++;
}while($i<=10);

$i=1;
do{
    var_dump('Massege..!');
}while($i<0);

$cityes=['Alex','Cairo','Paris','Madrid','Barchlona'];
for($i=0;$i<count($cityes);$i++){
    var_dump($cityes[$i]);
}

$total=0;
$nums=[12,8,25,10,5];
for($i=0;$i<count($nums);$i++){
    $total+=$nums[$i];
}
var_dump($total);

$numbers=[95,74,741,5252,12,441];
$largest=$numbers[0];
for($i=0;$i<count($numbers);$i++){
    if($numbers[$i]>$largest) $largest=$numbers[$i]; 
}
var_dump($largest);

$movies=['spiderman','stranger things','from','prison break','breaking bad'];
for($i=count($movies)-1;$i>=0;$i--){
    var_dump($movies[$i]);
}

$products=['tomato','pizza','pasta','apple','ships'];
$prices=[15.55,98.12,50.20,12.3,5.1];
for($i=0,$x=0;$i<count($products),$x<count($prices);$i++,$x++){
    var_dump($products[$i],$prices[$x]);
}













$bookTrip =function($destination,$days,$travelClass = 'Economy',$includeHotel = 'true'){
    echo "--- Trip Details ---\n";
    echo "Destination: $destination\n";
    echo "Duration: $days days\n";
    echo "Travel Class: $travelClass\n";
    echo "Hotel: $hotelStatus\n\n";
};