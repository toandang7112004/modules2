<?php
    // class cha
    abstract class Fruits
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract public function intro();
    }

    // Các class con
    class Apple extends Fruits
    {
        public function intro()
        {
            return "Hi! Ăn $this->name nhé?";
        }
    }

    class Orange extends Fruits
    {
        public function intro()
        {
            return "Bạn thích ăn $this->name không?";
        }
    }

    class Lemon extends Fruits
    {
        public function intro()
        {
            return "Hoặc bạn cũng có thể ăn $this->name! =)))))))";
        }
    }

    // Create objects from the child classes
    $apple = new Apple("Táo");
    echo $apple->intro();
    echo "<br><br>";

    $orange = new Orange("Cam");
    echo $orange->intro();
    echo "<br><br>";

    $lemon = new Lemon("Chanh");
    echo $lemon->intro();
    ?>