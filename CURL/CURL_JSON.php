<?php 

echo "<p>날씨 출력</p>";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/posts');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

// echo $response;


$arr = json_decode($response);
// print_r($arr);




foreach($arr as $key) {
  echo "<p><strong>UserId:</strong> ".$key -> userId." <small>id:".$key -> id."</small></p>";
  echo "<h3>".$key -> title."</h3>";
  echo "<p>".$key -> body."</p>";
  echo "<hr>";
}
// crul_close($ch);