<?php 
// PHP OOP
// 클래스 상수
// 상수는 값을 변경할 수 없으며 프로퍼티를 쓰는 방법과 차이가 있습니다.

class Base {
  // 클래스 상수
  const AGE = 22; // $ 사인이 없고 일반적으로 대문자로 표기한다. 접근 제어자는 기본적으로 public(표기 안해도 됨)

  public $mustOlderThan = 21;

  public function display() {
    // echo $this -> mustOlderThan; // 일반 프로퍼티
    echo self::AGE; // 클래스 상수
  }
}


Base::display(); // 바로 접근도 가능합니다

// 프로퍼티 접근 방법
// 일반 멤버변수는 인스턴스를 통해 접근 해야 하지만
$base = new Base();
echo $base -> mustOlderThan;
echo Base::$mustOlderThan; // 오류

// 클래스 상수 접근 방법
// 클래스 상수는 바로 접근 가능합니다.
echo Base::AGE; // 22
