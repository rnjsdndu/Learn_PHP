<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이미지 업로드</title>
</head>
<body>
  <?php include "./menu.html";?>

  <form method="post" name="upload_form" enctype="multipart/form-data" action="gallery_upload_form_ok.php">
    이미지 업로드 : 
    <input type="file" name="photo">
    <button id="upload_btn">업로드 확인</button>
  </form>
  <script src="upload.js"></script>
</body>
</html>