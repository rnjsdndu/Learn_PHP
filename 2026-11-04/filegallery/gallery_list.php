<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>갤러리</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include "menu.html" ?>

  <div class="wrapper">
    <?php 
      $d = dir("./upload"); // 인스턴스 생성
      while($file = $d->read()) {
        // 혹시 모르니깐 한번 더 검사하기
        if($file == '.' or $file == '..') {
          continue;
        }
        $arr = explode('.', $file);
        $ext = end($arr); // 확장자 가져오기
         if($ext == 'jpg' or $ext == 'png' or $ext == 'PNG' or $ext == 'JPG') {
          echo '
            <div class="img_div">
              <img src="./upload/'.$file. '" width="100">
            </div>
          ';


          // 또다른 방법
          
          // echo "
          //   <div class='img_div'>
          //     <img src='./upload/{$file}' width='100'>
          //   </div>
          // ";

          // 또또다른 방법
          // echo "
          //   <div class=\"img_div\">
          //     <img src=\"./upload/{$file}\" width=\"100\">
          //   </div>
          // ";
         }
      }
    ?>
  </div>
</body>
</html>