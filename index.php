<?php


//define static methods
// class Greeting
// {
//     // public function __construct($num1, $num2)
//     // {
//     //     echo self::addNumber($num1, $num2);
//     // }
//     protected static function welcome($msg)
//     {
//         echo $msg;
//     }

//     //addnumber
//     public static function addNumber($num1, $num2)
//     {
//         return $num1 + $num2;
//     }
// }

// class NewArea extends Greeting
// {
//     public static function addnewdata($msg)
//     {
//         parent::welcome($msg);
//     }
// }

// NewArea::addnewdata("Hello World, I am from New Area");

// Call static method
// Greeting::welcome();
// echo Greeting::addNumber(1, 2);


//define trait
// trait message1
// {
//     public function msg1()
//     {
//         echo "OOP is fun! ";
//     }

//     //addition
//     public function addnumber($num1, $num2)
//     {
//         return $num1 + $num2;
//     }

//     //multiply function
//     public function multiplynumber($num1, $num2)
//     {
//         return $num1 * $num2;
//     }
// }

// //trait 2
// trait message2
// {
//     public function msg2()
//     {
//         echo "OOP reduces code duplication!";
//     }
// }

// class Welcome
// {
//     use message1, message2;
// }

// //class 3
// class TestingClass
// {
//     use message1;
// }

// $obj = new Welcome();
// $obj->msg1();
// echo $obj->addnumber(10, 20);
// echo "<br>";
// echo $obj->multiplynumber(10, 20);
// echo "<br>";
// $obj->msg2();

// $obj2 = new TestingClass();
// $obj2->msg1();
// echo $obj2->addnumber(10, 20);
// echo "<br>";
// echo $obj2->multiplynumber(10, 20);




//defined interface

// interface Animal
// {
//     public function makeSound();

//     public function eat(): string;
// }

// //define child class
// class Cat implements Animal
// {
//     public function makeSound()
//     {
//         echo "Meow";
//     }

//     public function eat(): string
//     {
//         return "Cat is eating";
//     }
// }

// //define child class
// class Dog implements Animal
// {
//     public function makeSound()
//     {
//         echo "Woof";
//     }

//     public function eat(): string
//     {
//         return "Dog is eating";
//     }
// }

// //define child class
// class Mouse implements Animal
// {
//     public function makeSound()
//     {
//         echo "Squeak";
//     }

//     public function eat(): string
//     {
//         return "Mouse is eating";
//     }
// }

// //make an instance of the class
// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// //add object to an array
// $animals = array($cat, $dog, $mouse);
// //foreach loop
// foreach ($animals as $animal) {
//     echo "<br>";
//     $animal->makeSound();
//     echo "<br>";
//     echo $animal->eat();
//     echo "<br>";
// }



// abstract class Car
// {
//     public $name;
//     public $number;
//     public function __construct($name, $number)
//     {
//         $this->name = $name;
//         $this->number = $number;
//     }

//     //intro
//     abstract public function intro(): string;

//     //int data type
//     abstract public function int(): int;
// }

// //child classes
// class Audi extends Car
// {
//     public function intro(): string
//     {
//         return "Choose German quality! I'm an $this->name!";
//     }

//     public function int(): int
//     {
//         return $this->number;
//     }
// }

// //another child class
// class Volvo extends Car
// {
//     public function intro(): string
//     {
//         return "Proud to be Swedish! I'm a $this->name!";
//     }

//     public function int(): int
//     {
//         return $this->number;
//     }
// }

// //another class
// class Citroen extends Car
// {
//     public function intro(): string
//     {
//         return "French extravagance! I'm a $this->name!";
//     }

//     public function int(): int
//     {
//         return $this->number;
//     }
// }

// //create objects from the child classes
// $audi = new Audi("Audi", 50);
// $volvo = new Volvo("Volvo", 2);
// $citroen = new Citroen("Citroen", 45);

// //get the values
// echo $audi->intro();
// echo "<br>";
// echo $volvo->intro();
// echo "<br>";
// echo $citroen->intro();
// echo "<br>";

// //get the int values
// echo $audi->int();
// echo "<br>";
// echo $volvo->int();
// echo "<br>";
// echo $citroen->int();


// class Fruit
// {
//     protected $name;
//     protected $color;
//     const LEAVING_MESSAGE = "Thank you for visiting our fruit stand!";

//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     public function intro()
//     {
//         echo "The fruit sd sdsds is {$this->name} and the color is {$this->color}.";
//     }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit
// {
//     public $weight;

//     public function __construct($name, $color, $weight)
//     {
//         $this->name = $name;
//         $this->color = $color;
//         $this->weight = $weight;
//     }

//     public function intro()
//     {
//         echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight}";
//     }

//     public function addition($num1, $num2)
//     {
//         echo $num1 + $num2;
//     }

//     //byebye
//     public function byebye()
//     {
//         echo self::LEAVING_MESSAGE;
//     }
// }
// $strawberry = new Strawberry("Strawberry", "red", "30kg");
// // $strawberry->addition(5, 10);
// $strawberry->byebye();
