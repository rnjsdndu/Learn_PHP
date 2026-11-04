<?php
// PHP로 폴더의 파일목록 가져오기 dir()함수 사용

$dir_name = "./upload";

$d = dir($dir_name); // 인스턴스를 만든다
// 인스턴스란?
// 변수안에 class 인자값을 넣어준 것
$file_name = $d->read(); // 파일 하나를 읽어온다.
// 첫 번째 읽어올땐 현재 디렉터리 (.)
// 두 번째 읽어올땐 상위 디렉터리 (..)
// 세 번째 부터는 하위 파일 하나씩 (OOO.png)
$d->close(); // 메모리

echo dir($dir_name) -> read();


