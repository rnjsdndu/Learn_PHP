<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSV 파일 업로드</title>
</head>
<body>
  <form method="post" action="csv_upload.php" enctype="multipart/form-data">
    <h3>CSV 파일을 업로드 해주세요.</h3>
    <input type="file" name="csv">
    <button id="btn">확인</button>
  </form>

  <script>
    const btn = document.querySelector('#btn')
    const input = document.querySelector('input')
    const form = document.querySelector('form')
    btn.addEventListener('click',(e)=>{
      e.preventDefault();

      const splitFile = input.value.split('.')
      const extension = splitFile[splitFile.length - 1]

      if(input.value == '') {
        alert('파일을 업로드 해주세요.')
        return
      }

      if(extension != 'csv') {
        alert('csv 파일을 업로드 해주세요.')
        return;
      }

      form.submit();
    })
  </script>
</body>
</html>