<?php 
session_start();

if( !isset($_SESSION['ss_id']) or $_SESSION['ss_id'] != '') {
  echo "
    <script>
      alert('여기는 회원 전용 페이지입니다. 로그인 후 접근이 가능합니다.')
      self.location.href='index.php'
    </script>
  ";
  exit;
}
?>


<p>여기는 회원전용 페이지입니다.</p>

<a href="logout.php">로그아웃</a>