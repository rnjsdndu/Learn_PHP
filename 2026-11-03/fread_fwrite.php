<?php 
// PHP로 파일을 읽고, 쓰기, fread, fwrite


// 파일 쓰기, 읽기를 하기 위해선 파일을 먼저 열어줘야 한다

// fopen(): 파일 열기
$file = 'imsi.txt';
$pf = fopen($file, 'r'); // r: read

// 파일이 있는지 확인
if (file_exists($file)) {
  // 파일이 잘 열리는지 확인
  $pf = fopen($file, 'r'); // 읽기 모드로 열기
  if ($pf) {
    $fz = filesize($file);
    $fr = fread($pf, $fz);
    // 파일을 읽을 수 있는지 확인
    if($fr) {
      echo $fr;
      fclose($pf); // 닫기(메모리)
    } else {
      echo "파일 읽기에 실패했습니다.";
    }
  } else {
    echo "파일 열기에 실패했습니다.";
  }
} else {
  echo "존재하지 않는 파일입니다.";
}


// fwrite(): 파일에 쓴다
$file = "imsi1.txt";
// 쓰기 모드로 쓰면 파일의 내용에 덮어쓰기 때문에 원래 있던 파일 내용은 다 지워진다
$pf = fopen($file, 'w'); // 쓰기 모드로 열기
// 추가하기 모드로 열면 기존 파일의 내용에서 추가하여 작성한다
$pf = fopen($file, 'a'); // 추가하기 모드로 열기
// PHP_EOL로 줄바꿈 해주기
fwrite($pf, PHP_EOL.'Say Hi~~!'); // imsi1.txt파일에 Say Hi~~!가 써짐

$pf = fopen($file, 'a+'); // 읽기와 쓰기를 동시에 할 수 있음


