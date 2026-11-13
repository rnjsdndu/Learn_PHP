<?php 

$password = '1234aabbcc';

$new_password = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $new_password)) {
  // 이거 출력
  echo '비밀번호 일치';
}else {
  echo '비밀번호 오류';
}

$wrong_password = '1111';
if (password_verify($wrong_password, $new_password)) {
  echo '비밀번호 일치';
}else {
  // ㅇㄱ ㅊㄹ
  echo '비밀번호 오류';
}