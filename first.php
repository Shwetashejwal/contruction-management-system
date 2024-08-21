<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    echo"This is Parameterized constructor";
    echo"<br>";
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo "The Name of Fruit is = ".$apple->get_name();
?>
