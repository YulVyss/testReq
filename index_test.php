<?php

class Cat
{
  public $weight = 1;

  public function eat() {
    $this->weight++;
  }
}

$cat = new Cat();
$cat->eat();
echo $cat->weight;


// class SimpleClass 
// {
//   public $bar = 'свойство';
//   public function bar() {
//     return 'метод';
//   }
//   function displayVar() {
//     echo "something";
//   }
// }

// $obj = new SimpleClass();
// echo $obj->bar;
// echo '<br>';
// echo $obj->bar(), PHP_EOL;
// // PHP_EOL Корректный символ конца строки, используемый на данной платформе.
// echo '<br>';
// class ExtendClass extends SimpleClass
// {
//   function displayVar()
//   {
//     echo "Расширенный класс \n";
//     echo '<br>';
//     // parent::displayVar();
//   }
// }

// $extended = new ExtendClass();

// $extended->displayVar();

// echo '<br>';
