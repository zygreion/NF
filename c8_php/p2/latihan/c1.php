<?php
class Fruit
{
  // Property
  public $name;
  public $color;

  // Method
  function getName()
  {
    return $this->name;
  }

  function getColor()
  {
    return $this->color;
  }
}

// Object Apple
$apple = new Fruit();
$apple->name = "Apple";
$apple->color = "Red";

// Object Banana
$banana = new Fruit();
$banana->name = "Banana";
$banana->color = "Yellow";

// Tampilkan
echo $apple->getName();
echo $apple->getColor();
echo '<br/><br/>';
echo $banana->getName();
echo $banana->getColor();
