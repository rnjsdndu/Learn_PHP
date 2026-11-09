<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>글등록Form</title>
</head>
<body>
  <form action="./input_ok.php" enctype="multipart/form-data" method="post">
    <label>글제목</label> 
    <input type="text" name="subject" class="name_input"> <br>
    <label>글내용</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea> <br>
    <button>글 등록 확인</button>
  </form>
</body>
</html>