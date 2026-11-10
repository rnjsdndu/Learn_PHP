<?php 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://cbtti.or.kr');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

echo $response; // http://cbtti.or.kr 링크의 내용을 통으로 가져온다 (실제 페이지처럼 나옴)

curl_close($ch);

// 지금 php 파일은 UTF-8 charset이기 때문에 다른 형식의 웹사이트를 가져오면 깨지게 된다
// iconv()로 형식을 바꿔줄 수 있다.
echo iconv('euc-kr', 'utf-8', $response);

