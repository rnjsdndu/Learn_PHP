<?php
session_start();

$edit_idx = (isset($_SESSION['edit_idx']) && $_SESSION['edit_idx'] != '' && is_numeric($_SESSION['edit_idx'])) ? $_SESSION['edit_idx'] : '';

include 'dbconfig.php';

$name = (isset($_POST['name']) && $_POST['name'] != '') ? $_POST['name'] : '';
$password = (isset($_POST['password']) && $_POST['password'] != '') ? $_POST['password'] : '';
$subject = (isset($_POST['subject']) && $_POST['subject'] != '') ? $_POST['subject'] : '';
$content = (isset($_POST['content']) && $_POST['content'] != '') ? $_POST['content'] : '';
$idx = (isset($_POST['idx']) && $_POST['idx'] != '' && is_numeric($_POST['idx'])) ? $_POST['idx'] : '';
$code = (isset($_POST['code']) && $_POST['code'] != '') ? $_POST['code'] : '';



if($idx == '') {
  $arr = ['result' => 'empty_idx'];
  die(json_encode($arr));  
}
  
if ($edit_idx != $idx) {
  $arr = ['result' => 'denied'];
  die(json_encode($arr));
}

$pwd_hash = '';
if($password != '') {
  $pwd_hash = password_hash($password, PASSWORD_BCRYPT); // 암호화
}

// 정규식을 이용해서 IMG 태그 전체 / SRC 값을 추출하기
preg_match_all("/img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);

$img_array = [];
foreach($matches[1] AS $key => $row) {
  // 이미 업로드된 이미지
  if(substr($row, 0, 6) == 'upload') { // 6번째 까지의 값이 upload로 돼있다면 이미 업로드 됐다고 판단
    $img_array[] = $row;
    continue;
  }

  // 외부 링크 이미지는 skip
  if(substr($row, 0, 5) != 'data:') {
    $img_array[] = $row;
    continue;
  }

  // $row가 들어와있는 형태 : 'data:image/png;base64,dkdkaede';
  list($type, $data) = explode(';', $row);

  // $type: data:image/png
  // $data: base64,dkdkaede
  list(, $data) = explode(',',$data); // 따로 변수를 쓰지 않으면 해당 위치의 값만 가져온다.

  // $data: dkdkaede
  $data = base64_decode($data);

  // 확장자 가져오기
  list(, $ext) = explode('/', $type);
  // $ext: png
  $ext = ($ext == 'jpeg') ? 'jpg' : $ext; //jpeg일때는 jpg로 가져와라

  // 파일명 만들기
  $filename = date('YmdHis').'_'.$key.'.'.$ext; 

  file_put_contents('upload/'.$filename, $data);

  $content = str_replace($row, 'upload/'.$filename, $content);
  $img_array[] = 'upload/'.$filename;

}

// implode(): 첫 번째 인자(구분자)를 기준으로 배열을 문자열로 합치기
$imglist = implode('|', $img_array);

if($img_array == []) {
  $imglist = '';
}

if($pwd_hash != '') {
  $sql = "UPDATE freeboard SET name=:name, password=:password, subject=:subject, content=:content, code=:code WHERE idx=:idx";
} else {
  $sql = "UPDATE freeboard SET name=:name, subject=:subject, content=:content, code=:code WHERE idx=:idx";
}

$stmt = $conn -> prepare($sql);

if($pwd_hash != '') {
  $stmt -> bindParam(':password', $pwd_hash);
}

$stmt -> bindParam(':name', $name);
$stmt -> bindParam(':subject', $subject);
$stmt -> bindParam(':content', $content);
$stmt -> bindParam(':code', $code);
$stmt -> bindParam(':idx', $idx);

$stmt -> execute();

$arr = ['result' => 'success'];
die(json_encode($arr));



