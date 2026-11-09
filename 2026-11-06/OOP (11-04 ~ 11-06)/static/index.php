<?php 
// PHP OOP 정적 method, 정적 프로퍼티 static
// static을 사용하면 인스턴스를 생성했을때 프로퍼티가 각각 다른 메모리에 저장되지 않고 하나의 메모리에 있는 프로퍼티를 공유해서 쓴다
class Car {
  static private $count = 0; // static을 제거하면 $count라는 properties가 각각 다른 메모리에 저장된다.
  private static $carList = []; // // 정적 properties
  private $name;


  public function __construct($name)
  {
    $this->name = $name;
    self::$count = self::$count + 1; // static을 사용했을때 문법
    array_push(self::$carList, $name); // 배열에 값 집어넣기 (a -> b -> c)
  }

  public function message() {
    echo "<p>".$this->name."가 생산되었습니다</p>";
    echo "<p>[생산번호: ".self::$count."]</p>";
  }

  public static function getCarList() {
    return self::$carList;
  }
}


// static을 사용하지 않았을때
$p1 = new Car('볼보');
$p1->message(); // [생산번호: 1]
$p2 = new Car('아우디');
$p2 -> message(); // [생산번호: 1]
$p3 = new Car('페라리');
$p3 -> message(); // [생산번호: 1]

// static을 사용했을때
$p1 = new Car('볼보');
$p1->message(); // [생산번호: 1]
$p2 = new Car('아우디');
$p2 -> message(); // [생산번호: 2]
$p3 = new Car('페라리');
$p3 -> message(); // [생산번호: 3]

$a = implode(',', Car::getCarList());

echo "<p>".$a."</p>";