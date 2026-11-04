<?php 
session_start();
$_SESSION['ss_id'] = $_POST['id'];

?>
<script>
  alert('로그인 되었습니다.')
  location.href = './index.php';
</script>