<?php
abstract class Animal {
    abstract public function makeSound();
}
class Tiger extends Animal{
    function makeSound(){
        return 'hổ';
    }
}
class Chicken extends Animal{
    function makeSound(){
        return 'gà';
    }
}
$obj = new Tiger();
$obj1 = new Chicken();
// interface 
interface Edible{
     function  howtoeat();
}
class Fruit implements Edible{
    public function  howtoeat(){}
}
class Orange extends Fruit {
    public function  howtoeat(){}
}
class Apple extends Fruit {
    public function  howtoeat(){}
}
