<?php
// PHP 출력함수, 문자열 길이, 문자열 뒤집기, 문자열 찾기

// 출력함수
echo "1";
print "2";
echo"3", "안녕하세요"; // 여러 인자를 받을 수 있다
print "4", "안녕하세요"; // print는 단일 인자만 받을 수 있다

// 마크업 언어도 사용 가능하다
echo "<h2>PHP는 재밌다</h2>";
echo "Hello world! <br>";
echo "I'm about to learn PHP";

// echo문은 변수와 같이 사용 가능하다
$txt1 = "Learn PHP";
$x = 5;
$y = 5;
echo "<h2>".$txt1."</h2>";
echo "<h2>$txt1</h2>";
echo $x + $y; //10



// var_dump: 어떤 type인지 알려주는 함수
$x = 3333;
$d = 10.5;
$str = "문자열을 넣으면";
$strNum = "1111";
$strHan = "한글";

var_dump($x); // int(3333)
var_dump($d); // float(10.5)

// 문자열은 글자수가 아니라 몇 bytes인지를 출력
var_dump($str); // string(22) "문자열을 넣으면"
var_dump($strNum); // string(4) "1111"

//한글 1자 = 3bytes
var_dump($strHan); // string(6) "한글"

// strlen(): 문자열 bytes 반환
$x_len = strlen("한글");
echo $x_len; // 6

// str_word_count(): 단어의 개수를 반환
echo str_word_count("Hello World"); // 2
// 한글은 X
echo str_word_count("한글"); // 0 

// strrev(): 문자열 뒤집기
echo strrev("Hello World"); // dlroW olleH

// strpos(): 문자열 위치 찾기 (처음 위치)
$pos = strpos("Hello World World", "World");
echo $pos; // 6


?>