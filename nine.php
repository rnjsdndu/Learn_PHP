<?php 
//PHP break문 continue문은 반복문에서 사용해요

//break: break가 실행되면 반복문에서 빠져나온다.
for ($i = 0; $i < 10; $i++) {
  if($i == 4) {
    break;
  }
  echo "이 숫자는 $i 입니다.<br>";
}

//continue: continue가 실행되면 다음으로 건너뛴다
for ($i = 0; $i < 10; $i++) {
  if($i == 4) {
    continue;
  }
  echo "이 숫자는 $i 입니다.<br>";
}