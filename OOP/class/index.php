<?php 

// class 클래스명 { 코드 작성 }

class Fruit {
  // 멤버 변수 (Properties / 속성)
  private $name;
  public $color;

  // 멤버 함수 (Method)
  function set_name($name) {
    $this -> name = $name;
  }

  function get_name() {
    return $this -> name;
  }

  function set_color($color) {
    $this -> color = $color;
  }

  function get_color() {
    return $this -> color;
  }

}

$apple = new Fruit();
$banana = new Fruit();
$apple -> set_name('Apple');
$banana -> set_name('Banana');
$banana -> set_color('yellow');

echo $banana -> color; // 멤버변수(properties/속성)가 public이기 때문에 다이렉트로 접근 가능하다

// private인 멤버 변수에 접근하기 위해선 멤버 함수(Method)를 통해 접근해야한다.
echo $apple -> get_name();

