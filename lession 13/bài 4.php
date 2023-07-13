<?php
/*Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng là "start".
Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa từ lớp Vehicle và
triển khai phương thức start theo cách riêng của từng loại phương tiện.*/
abstract class Vehicle{
    abstract public function start();
}
class Car extends Vehicle{
    public function start (){
        return "Car started";
    }
}
class Motorcycle extends Vehicle{
    public function start (){
        return "Motocycle started";
    }
}
$Car = new Car ();
echo $Car -> start () ."<br>";
$Motorcycle = new Motorcycle ();
echo $Motorcycle -> start () ."<br>";
