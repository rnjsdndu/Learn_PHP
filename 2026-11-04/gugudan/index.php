<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>폼 입력을 통한 구구단 출력</title>
</head>
<body>
  <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" name="form1">
    <label for="">출력하고자 하는 단을 입력 바랍니다.</label>
    <input type="text" name="dan" id="dan" autocomplete="off">
    <button id="submit_btn">구구단 출력</button>
  </form>

  <?php 
    // 비어있는 값이 넘어오지 않았는지
    if(isset($_POST['dan']) and $_POST['dan'] != '') {
      // 숫자 값이 넘어왔는지
      if(is_numeric($_POST['dan'])) {
        // 구구단 계산
        for($i=1; $i <= 9; $i++) {
          echo $_POST['dan']. 'x'. $i .'='. $_POST['dan'] * $i .'<br>';
        }
      } else { // 숫자가 아니라면
        echo "숫자를 입력해야 구구단 출력이 가능합니다.";
      }
    }
  ?>

  <script>
    const submit_btn = document.querySelector('#submit_btn')
    const dan = document.querySelector('#dan')
    submit_btn.addEventListener('click', (e) =>{
      // 기본 기능 막기
      e.preventDefault();
      // input에 빈 값이 있을 경우
      if(dan.value == '') {
        alert('입력값이 비었습니다.')
        // input focus
        dan.focus()
        return
      }

      // 숫자인지
      if(isNaN(dan.value)) {
        alert('숫자를 입력해 주세요.')
        dan.focus();
        return;
      }
      // submit
      document.form1.submit();
    })
  </script>
</body>
</html>