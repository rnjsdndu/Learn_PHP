<?php

$vote = (isset($_GET['vote']) && $_GET['vote'] != '') ? $_GET['vote'] : '';

if ($vote == '') {
  exit;
}

$filename = 'data/ajax_poll.txt';

if (!file_exists($filename)) {
  // 파일이 존재하지 않으면
  file_put_contents($filename, "0,0"); // 파일 생성 후 0,0
}

$content = file_get_contents($filename); // $filename에 담긴 파일명의 값이 가져와짐
list($yes, $no) = explode(',', $content); // 한번에 만들기


if ($vote == 0) {
  // 0 (input에 설정해놓은 value)이라면 yes 하나 올리기
  $yes = $yes + 1;
} else {
  $no++;
}

file_put_contents($filename, "$yes,$no");

echo "<h2>투표결과</h2>
<table>
  <tr>
    <td>예</td>
    <td>".$yes."</td>
  </tr>
  <tr>
    <td>아니오</td>
    <td>".$no."</td>
  </tr>
</table>";