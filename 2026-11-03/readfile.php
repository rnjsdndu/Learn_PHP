<?php 
// PHP로 파일의 절대위치를 감출때 유용한 readfile 함수

// readfile(): include,require와 달리 파일을 PHP코드로 실행하지 않고 파일 내용을 그대로 출력

readfile('readfileSample.php'); // 아무것도 안나오고 소스 보기를 하면 readfileSmaple.php의 내용이 있음

include "readfileSample.php"; // readfileSmaple.php를 실행하면 나오는 안녕하세요 텍스트가 나옴
