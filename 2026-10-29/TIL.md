# PHP 강의 (1~5강)

작성일: 2025-10-29

## 01. PHP소개

#### PHP

PHP는 웹 프로그래밍 언어이다.
HTML, CSS, JavaScript는 웹 브라우저에서 동작하지만 PHP는 웹 서버에서 동작하는 언어로 데이터베이스 등과 연동되어 회원관리, 게시판 등의 기능을 만드는데 사용된다.

#### XAMPP

Apache + PHP + MariaDB 프로그램을 한 번에 설치해 주는 프로그램

## 02. XAMPP 설치, PHP개발환경 구성

### Apache를 실행할 때 유의할 점

Apache는 웹 서버로 포트 충돌이 나 돌아가지 않는 경우가 있기에
httpd.conf → Listen에서 안쓰는 포트로 바꿔주기

## 03. PHP사용을 위한 VSCode 설정

### Extension

PHP Intelephense Extension: 변수 자동완성 등의 편의 기능을 탑제한 Extesion

## 04. PHP 생기초문법, 변수표기법, 주석처리

```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!--생기초문법, 변수표기법, 주석처리, 자바스크립트와 차이-->
  <h1><?php echo "안녕하세요";?></h1>
  <h1><?= "안녕하세요"; ?></h1>
  <?php $num = 1;?> <!--변수-->

</body>
</html>
```

```php
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>My first PHP Page</h1>
  <!-- HTML 주석은 소스코드 보기로 보이지만 -->
  <?php
  //PHP 코드는 보이지 않습니다
  //주석입니다
  /*
  여러 줄
  주석입니다
  */
  $txt = "PHP";
  echo "I love $txt !";
  ?>

</body>

</html>
```

```php
<?php 
	$txt = "PHP";
	echo "I love $txt !";
?>
```

위 코드를 실행한 웹 페이지에서 소스보기를 하면

!image.png

위와 같이 나온다.
PHP는 SSR(Server Side Rendering) 방식이여서 실제 웹 브라우저가 받은건 **I love PHP !**라는 텍스트밖에 없다.

## 05. PHP 변수의 범위, 지역변수, 글로벌 변수 등

```php
<?php
    $txt = "안녕하세요"; // 문자열
    $x = 5; // 정수
    $y = 10.5; // 실수
    $X = 10;
    echo "x = $x, X = $X"; //x = 5, X = 10
?>
```

PHP는 동적 타입 언어로 변수 앞에 형을 선언하지 않아도 값에 따라 형이 정해진다.

또한 PHP의 변수는 대소문자를 구분한다.

```php
  <?php 
    $x = 5;

    function show () {
      $x = 3;
      $x++;
      echo "$x"; //4
    }

    echo "$x"; //5
  ?>
```

함수 안의 스코프는 전역 변수($x = 5)를 잡지 못한다.