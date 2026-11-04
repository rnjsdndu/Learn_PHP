<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 폼</title>
  <script src="./login.js"></script>
</head>

<body>
  <?php
  session_start();
  $session = $_SESSION['ss_id'] ?? null
  ?>
  <?php if (isset($session)): ?>
    <h1><?= $_SESSION['ss_id'] ?>님 환영합니다!</h1>
    <a href="logout.php">로그아웃</a>
  <?php else: ?>
    <h1>로그인</h1>
    <form action="./login_ok.php" method="post" name="login_form">
      <label for="id">아이디</label>
      <input type="text" name="id" id="id" placeholder="아이디 입력" autocomplete="off">
      <br>
      <label for="password">비밀번호</label>
      <input type="password" name="pw" id="pw" placeholder="비번 입력">
      <br>
      <button id="login_btn">확인</button>
    </form>
  <?php endif; ?>
</body>

</html>