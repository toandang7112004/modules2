<?php

class Shape
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show(): string
    {
        return "I am a shape. My name is $this->name";
    }
}
class Circle extends Shape
{
    public int|float $radius;

    public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

     public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

     public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
}

class Cylinder extends Circle
{
    public int $height;

 public function __construct(string $name,int|float $radius, int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

   public function calculateArea(): int|float
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(): int|float
    {
        return parent::calculateArea() * $this->height;
    }
}

class Rectangle extends Shape
{
    public int $width;
    public int $height;

   public function __construct(string $name,
                                        int $width,
                                        int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
}