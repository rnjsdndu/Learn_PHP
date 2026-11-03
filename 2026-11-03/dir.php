<?php
// PHP로 폴더의 파일목록 가져오기 dir()함수 사용

$dir_name = "./upload";

$d = dir($dir_name); // 인스턴스를 만든다
$file_name = $d->read();
$d->close(); // 메모리




