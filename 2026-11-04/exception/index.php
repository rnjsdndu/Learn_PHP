<?php 
function divide($dividend, $divisor) {
  return $dividend / $divisor;
}

echo divide(5, 0); // error


// 예외처리
function divide2($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception ("Divison by zero"); // 오류 던져주기
  }
  return $dividend / $divisor;
}


try {
  // 해당 코드 실행
  echo divide2(5, 0);
} catch (Exception $e) {
  // try문에서 오류가 난다면 실행
  echo "Unable to divide.";



  // $e에는 뭐가 들어있을까??
  $code = $e -> getCode(); // 에러코드
  $message = $e -> getMessage(); // 메세지 (throw 했다면 throw)
  $file = $e -> getFile(); // 에러가 발생한 파일
  $line = $e -> getLine(); // 에러가 발생한 라인

  echo "Exception thrown in $file on line $line: [Code $code] $message";
  // Exception thrown in C:\xampp\htdocs\Learn_PHP\exception\index.php on line 12: [Code 0] Divison by zero프로그램을 종료합니다.

} finally {
  // 오류가 나던 안나던 항상 처리
  echo "프로그램을 종료합니다.";
}




