<?php 
class Fruit {
  // properties
  public $name;
  public $color;

  // 생성자 (construct)
  function __construct($name, $color)
  {
    $this -> name = $name;
    $this -> color = $color;
  }

  // class 폴더에서 썼던 set_name을 생성자로 처리해 줄 수 있다
  function set_name($name) {
    $this -> name = $name;
  }

  function get_name() {
    return $this -> name;
  }

  function get_color() {
    return $this -> color;
  }
}

// 보통 개체가 만들어질때 반드시 수행되어야 하는 작업들을 생성자에 넣는다
// 인스턴스가 생성 되면 생성자가 자동으로 실행된다
$apple = new Fruit("사과", "빨강");
$banana = new Fruit("바나나", "노랑");

echo "이 과일의 이름은 ". $apple->get_name();
echo "이고 색깔은 ". $apple->get_color();
echo "입니다 <br>";

echo "이 과일의 이름은 ". $banana->get_name();
echo "이고 색깔은 ". $banana->get_color();
echo "입니다 <br>";


