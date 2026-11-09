<?php
// 소멸자 (destructor)

class Car
{
  public $name; // 자동차 이름
  public $color; // 자동차 색상

  function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;

    echo "<p>자동차가 생산되었습니다.</p>";
    echo "<p>이름: $this -> name</p>";
    echo "<p>색상: $this -> color</p>";
  }


  // 소멸자
  // 객체가 생성된 후 소멸할때 호출되는 메서드(멤버 함수)
  function __destruct()
  {
    echo "<p>자동차 폐차가 되었습니다.</p>";
    echo "<p>차량등록말소사실증명서가 발급되었습니다.</p>";
  }
}


$volvo = new Car("volvo", "빨강");
// 자동차가 생산되었습니다. (생성자 호출)
// 이름: 볼보 색상: 빨강 (인스턴스)
// 자동차 폐차가 되었습니다. (소멸자 호출)
// 차량등록말소사실증명서가 발급되었습니다. (소멸자 호출)

// 소멸자 인위적 호출
$volvo = new Car('volor', '빨강');
unset($volor); // 인스턴스를 해제함으로써 소멸자가 호출
echo "<p>프로그램 실행중</p>";