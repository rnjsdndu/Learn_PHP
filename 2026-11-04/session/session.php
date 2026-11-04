<?php 
session_start();


// isset(): 값이 있는지 없는지 boolean으로 반환 (null)
if(isset($_SESSION['ss_name'])) {
  echo "이름은 ". $_SESSION['ss_name'] . "입니다. <br>";
}else {
  echo "이름을 모르겠습니다.";
}

if(isset($_SESSION['ss_age'])) {
  echo "나이는 ". $_SESSION['ss_age'] . "입니다. <br>";
}else {
  echo "나이를 모르겠습니다.";
}

?>

<a href="make.php">세션 생성</a>
<a href="delete.php">세션 삭제</a>