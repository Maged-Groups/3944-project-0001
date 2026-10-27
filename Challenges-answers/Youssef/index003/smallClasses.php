<?php
declare(strict_types=1);
require_once('bigClasses.php');
class Car extends \Vehicle{
    public static function showNumberOfDoors(){
        echo 'Showing number of doors<br>';
    }
    public static function showFuelType(){
        echo'showing fuel'; 
    }
}
class Motorcycle extends \Vehicle{
    public static function showEngineCapacity(){
        
    }
    public static function showHasSidecar(){

    }
}
class Bus extends \Vehicle{
    public static function showNumberOfPassengers(){
        
    }
    public static function showHasSidecar(){

    }
}
class Truck extends \Vehicle{
    public static function showLoadCapacity(){
        
    }
    public static function showNumberOfWheels(){

    }
}
class Pizza extends \Recipy{
    public static function showPizzaSize(){
        echo 'showig pizza size';
    }
}