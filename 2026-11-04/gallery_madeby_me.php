<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>내가만든갤러리</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    img {
      height: 100px;
      margin: 10px;
    }
  </style>
</head>

<body>
  <form action="./gallery_madeby_me.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upload" id="upload">
    <input type="submit" value="업로드">
  </form>

  <?php

  $imgTmp = $_FILES['upload']['tmp_name'] ?? null;
  $imgName = $_FILES['upload']['name'] ?? null;
  move_uploaded_file($imgTmp, "./upload/$imgName");
  $upload = scandir("./upload") ?? null;
  ?>

  <?php foreach ($upload as $u): ?>
    <?php
    if ($u == '.' || $u == '..') {
      continue;
    }
    ?>
    <img src="./upload/<?= $u ?>" alt="<?= $u ?>">
  <?php endforeach; ?>

  <script>
    const submit = document.querySelector('input[type="submit"]')
    const form = document.querySelector('form');
    submit.addEventListener('click', () => {
      if (form.upload.value == '') {
        alert('파일을 선택해주세요');
        return;
      }
    })
  </script>
</body>

</html>