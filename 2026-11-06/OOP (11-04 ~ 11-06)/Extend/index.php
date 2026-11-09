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
    echo "이 과일 이름은 {$this->name} 이고 색깔은 {$this -> color} 입니다.";
  }
}

class Mango extends Fruit {
  public function message() {
    echo "나는 망고입니다.";
  }
}

// $mango = new Mango("망고","노랑색");
// $mango->message();
// $mango->intro(); // mango 클래스에는 intro 메서드가 없지만 상속 받았기 때문에 사용할 수 있다.

$f = new Fruit("토마토", "붉은색");

$f -> message();