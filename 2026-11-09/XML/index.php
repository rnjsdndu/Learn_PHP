<?php 
$myxml = file_get_contents("https://feeds.feedburner.com/zdkorea"); // 내용을 텍스트로 가져와서 변수에 담기

// echo $myxml;


$xmldom = simplexml_load_string($myxml); // 접근 가능한 형태(객체와 배열)로 바뀐다

echo "<h1>".$xmldom -> channel -> title."</h1>";
echo "<h2>".$xmldom -> channel -> description."</h2>";

// print_r($xmldom);

foreach($xmldom -> channel -> item as $row) {
  echo "<a href='".$row -> link."'>".$row -> title."</a> <br>";
}