<?php 
session_start();
session_unset();
session_destroy();

// 세션 하나만 삭제하고 싶을때
unset($_SESSION['ss_age']); // 나이 삭제

?>

<a href="session.php">세션 확인</a>