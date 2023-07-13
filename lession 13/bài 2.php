<?php
abstract class Animal {
    abstract protected function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Gâu gâu";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meo meo";
    }
}

$Dog = new Dog();
echo $Dog -> makeSound () ."<br>";
$Cat = new Cat();
echo $Cat -> makeSound () ."<br>";
?>