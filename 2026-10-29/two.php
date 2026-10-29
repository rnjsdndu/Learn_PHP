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

  <?php
    $txt = "안녕하세요";
    $x = 5;
    $y = 10.5;
    $X = 10;
    // 변수는 대소문자를 구분한다.
    echo "x = $x, X = $X";
  ?>

  <?php 

    $x = 5;

    function show () {
      $x = 3;
      $x++;
      echo "$x"; //4
    }

    echo "$x"; //5
  ?>
</body>

</html>