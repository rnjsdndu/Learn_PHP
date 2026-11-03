<?php 

print_r($_FILES);
// Array
// (
//     [ufile] => Array
//         (
//             [name] => 스크린샷 2026-09-18 101612.png
//             [type] => image/png
//             [tmp_name] => C:\xampp\tmp\php2A76.tmp
//             [error] => 0
//             [size] => 1659873
//         )

// )

echo "파일명은 ".$_FILES['ufile']['name']."입니다.";
echo "파일 용량은 ".$_FILES['ufile']['size']."입니다.";


// 업로드된 파일 폴더에 저장하기
// 업로드된 파일은 tmp 공간에 임시 저장된다
move_uploaded_file($_FILES['ufile']['tmp_name'], "./upload/".$_FILES['ufile']['name']);

// php.ini의 경로를 확인하는 방법: phpinfo()로 찍어보기
// phpinfo()로 file_uploads가 On인지 꼭 확인하기 Off면 파일 업로드가 안됨.
// phpinfo() -> post_max_size의 용량 안에서 전송된다
// 용량 바꾸는 법: php.ini에서 post_max_size를 바꾸기
// 반영은 아파치를 껐다 키면 된다

