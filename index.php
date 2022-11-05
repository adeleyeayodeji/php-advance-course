<?php
//defined custom class
class Fruit
{
    protected $name;
    protected $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit sd sdsds is {$this->name} and the color is {$this->color}.";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro()
    {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight}";
    }

    public function addition($num1, $num2)
    {
        echo $num1 + $num2;
    }
}
$strawberry = new Strawberry("Strawberry", "red", "30kg");
// $strawberry->addition(5, 10);
$strawberry->intro();
