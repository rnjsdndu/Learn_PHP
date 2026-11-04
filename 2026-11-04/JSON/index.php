<?php 
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 20);

// json_endcode(): PHP 연관배열 => JSON
// JSON 형식으로 변환
echo json_encode($age); // {"Peter":35, "Ben":37, "Joe":20} 

// json_decode($json, $bool): JSON을 객체 또는 배열로 반환 (false가 기본값이며 객체)
$json = '{"Peter": 35, "Ben": 37, "Joe": 20}';
$obj = json_decode($json); // 객체로 반환
$arr = json_decode($json, true); // 배열로 반환
echo $obj->Peter;
echo $arr["Peter"];

foreach($arr as $key => $value) {
  echo $key . "는 ". $value . "살 입니다. <br>";
}