<?php
//defined custom class
class Fruit
{
    //property 
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    //get name method
    public function get_name()
    {
        return $this->name;
    }

    //get color method
    public function get_color()
    {
        return $this->color;
    }

    //destruct
    public function __destruct()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
        echo "<br>";
    }
}

//define the object
$apple = new Fruit("Apple 2", "Blue");
//banana
$banana = new Fruit("Banana 2", "Green");
//result
// echo $banana->get_name();
// echo $banana->name;
// echo "<br />";
// echo $apple->get_name();
// echo $apple->name;
// echo "<br />";
// echo "<br />";
// echo $banana->get_color();
// echo $banana->color;
// echo "<br />";
// echo $apple->get_color();
// echo $apple->color;
