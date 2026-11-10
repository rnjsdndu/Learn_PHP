<?php

if (is_array($_FILES['photo']['tmp_name'])) {
  $cnt = count($_FILES['photo']['tmp_name']); // 배열의 크기(이미지 몇 개가 업로드 됐는지)
  $rs_arr = [];

  for($i = 0; $i < $cnt; $i++) {
    copy($_FILES['photo']['tmp_name'][$i], "upload/" . $_FILES['photo']['name'][$i]);
    $rs_arr[] = "upload/" . $_FILES['photo']['name'][$i];
    }
    
  $arr = array('result' => "success", "img" => implode('|', $rs_arr));

  die(json_encode($arr));
} else {
  // multiple이 아닌 경우
  copy($_FILES['photo']['tmp_name'], "upload/" . $_FILES['photo']['name']);

  $arr = array("result" => "success", "img" => "upload/" . $_FILES['photo']['name']);

  die(json_encode($arr));
}

