<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
</head>
<body>
  <h1>회원가입</h1>
  <form action="./sign.php" method="post">
    <label for="id">아이디: </label><input type="text" name="id" id="id" autocomplete="off"> <br>
    <label for="password">비밀번호: </label><input type="password" name="password" id="password" autocomplete="off"> <br>
    <label for="name">이름: </label><input type="text" name="name" id="name" autocomplete="off"> <br>
    <button type="submit">회원가입</button> <a href="./login.php">로그인하기</a>
  </form>
</body>
</html>