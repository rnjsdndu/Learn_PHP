<?php 
// 접근 제어자

// public
// protected
// private


class Fruit {
  public $name;
  protected $color;
  private $weight;

  function set_name($name) {
    $this -> name = $name;
  }

  protected function set_color($color) {
    $this -> color = $color;
  }

  private function set_weight($weight) {
    $this -> weight = $weight;
  }
}

$mango = new Fruit();
$mango -> set_name("망고");
// $mango -> set_color("노랑"); // protected인 메서드를 불러오기 때문에 에러

$mango->name = "Mango";
$mango->color = "노랑색"; // protected는 직접적으로 접근을 못하기 때문에 에러
$mango->weight = "300"; // private이기에 에러