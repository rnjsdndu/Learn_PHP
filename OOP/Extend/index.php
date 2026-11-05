<?php 

class Fruit {
  public $color;
  public $name;

  public function __construct($name, $color)
  {
    $this -> name = $name;
    $this -> color = $color;
  }

  public function intro() {
    echo "이 과일 이름은"
  }
}