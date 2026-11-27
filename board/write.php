<?php 

include "./dbconfig.php";

// print_r($_POST);

$name = (isset($_POST['name']) && $_POST['name'] != '') ? $_POST['name'] : ''; // 조건 ? 참 : 거짓
$password = (isset($_POST['password']) && $_POST['password'] != '') ? $_POST['password'] : ''; // 조건 ? 참 : 거짓
$subject = (isset($_POST['subject']) && $_POST['subject'] != '') ? $_POST['subject'] : ''; // 조건 ? 참 : 거짓
$content = (isset($_POST['content']) && $_POST['content'] != '') ? $_POST['content'] : ''; // 조건 ? 참 : 거짓
$code = (isset($_POST['code']) && $_POST['code'] != '') ? $_POST['code'] : ''; // 조건 ? 참 : 거짓

if($code == 'undefined') {
  $code = 'freeboard';
}

// 비밀번호 단방향 암호화
$pwd_hash = password_hash($password, PASSWORD_BCRYPT);

// summernote에 이미지의 base64로 인코딩된 src 추출
preg_match_all("/img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);

if($matches != 0) {
  $img_list = '';
} else {
  foreach($matches[1] AS $key => $val) {
  // echo $val;
  // echo "<br>";
  // data:image/png;base64, AAAFBfj42Pj4kjlkjlkjlkjlkjlkjlkjlkj image/jpeg


  list($type, $data) = explode(';', $val);
  // $type : data:image/png
  // $data : base64, AAAFBfj42Pj4kjkljkljkljkljkljkljkl

  list(, $ext) = explode('/', $type);
  $ext = ($ext == 'jpeg') ? 'jpg' : $ext;
  $filename = date('YmdHis').'_'.$key .'.'. $ext; // 20261126025100_0.png

  list(, $base64_decode_data) = explode(',', $data);

  $rs_code = base64_decode($base64_decode_data);
  file_put_contents("upload/".$filename, $rs_code);

  $img_array[] = "upload/".$filename;
  // str_replace(대상, 변경값, 본문 대상)
  $content = str_replace($val, "upload/".$filename, $content); // $content에 $val값을 "upload/".$filename으로 바꾸기


  }

  $img_list = implode('|', $img_array);
}



// DB에 Insert

$sql = "INSERT INTO freeboard (code, name, subject, password, content, imglist, rdate, ip) 
VALUES(:code, :name, :subject, :password, :content, :imglist, NOW(), :ip)";

$ip = $_SERVER['REMOTE_ADDR'];

$stmt = $conn -> prepare($sql);
$stmt -> bindParam(':code', $code);
$stmt -> bindParam(':name', $name);
$stmt -> bindParam(':subject', $subject);
$stmt -> bindParam(':password', $pwd_hash);
$stmt -> bindParam(':content', $content);
$stmt -> bindParam(':imglist', $img_list);
$stmt -> bindParam(':ip', $ip);
$stmt -> execute();

$arr = ['result' => 'success'];

$j = json_encode($arr); // { "result" : "success"}

die($j);







