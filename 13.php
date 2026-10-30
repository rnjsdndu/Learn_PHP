<?php 
// PHP 배열, 연관 배열에 대해서 배웁니다

// 연관 배열: Key와 Value의 쌍 Key:Value

$age = array(
  "아빠" => "40",
  "엄마" => "38",
  "나" => "12",
  "동생" => "8",
);

$fruits = array();
$fruits["사과"] = "브라질산";
$fruits["배"] = "한국산";
$fruits["포도"] = "칠레산";

print_r($fruits);

echo "엄마는 ". $age["엄마"]. "살 입니다.";

foreach($age as $key => $value) {
  echo "<h2>$key 는 $value 살</h2>";
}

