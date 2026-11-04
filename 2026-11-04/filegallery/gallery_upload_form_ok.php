<?php 

include "./menu.html";

// 서버로 넘어오면서 유효성 검사를 진행하기 때문에 자원 낭비가 발생한다. 이왕이면 프론트단에서 처리하기
if ($_FILES['photo']['name'] == '') {
  echo "
    <script>
      alert('파일을 선택하지 않으셨습니다.');
      slef.location.href='./gallery_upload_form.php';
    </script>
  ";
  exit;
}

print_r($_FILES);

$file_name = $_FILES['photo']['name'];
$arr = explode('.', $file_name);
$ext = end($arr); 

if($ext == 'jpg' or $ext == 'png' or $ext == 'PNG' or $ext == 'JPG') {
  copy($_FILES['photo']['tmp_name'], "./upload/".$_FILES['photo']['name']);

  echo "
    <script>
      alert('정상적으로 업로드가 완료되었습니다.');
      slef.location.href='./gallery_list.php';
    </script>
  ";
} else {
  echo "이미지 포맷 (png, jpg) 만 업로드 가능합니다.";
}

// 리눅스 환경이라면 파일 퍼미션 707 777 쓰기권한 (폴더의 권한 바꾸기)
