<?php 
// <!-- 수정 삭제 비밀번호 확인 -->
require 'dbconfig.php';

$mode = (isset($_POST['mode']) && $_POST['mode'] != '') ? $_POST['mode'] : ''; // mode값이 세팅 되어있는지, mode값이 비어있지는 않은지 체크
$idx = (isset($_POST['idx']) && $_POST['idx'] != '' && is_numeric($_POST['idx'])) ? $_POST['idx'] : ''; // 세팅 되어있는지, 비어있는지, 숫자인지
$password = (isset($_POST['password']) && $_POST['password'] != '') ? $_POST['password'] : ''; 
$code = (isset($_POST['code']) && $_POST['code'] != '') ? $_POST['code'] : ''; 



if ($mode == '') {
  $arr = ['result' => 'empty_mode'];
  die(json_encode($arr)); // {"result" : "empty_mode"}
}

if ($idx == '') {
  $arr = ['result' => 'empty_idx'];
  die(json_encode($arr)); // {"result" : "empty_idx"}
}

if ($password == '') {
  $arr = ['result' => 'empty_password'];
  die(json_encode($arr)); // {"result" : "empty_password"}
}

$sql = "SELECT password, code FROM freeboard WHERE idx = :idx";
$stmt = $conn -> prepare($sql);
$stmt -> bindParam(':idx', $idx);
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$stmt -> execute();
$row = $stmt -> fetch();


if ($row['code'] != $code) {
  $arr = ['result' => 'wrong_code'];
  die(json_encode($arr));
}


if (password_verify($password, $row['password'])) { // hashing된 password를 비교

  if ($mode == 'delete') {
    $sql = "DELETE FROM freeboard WHERE idx = :idx";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(':idx', $idx);
    $stmt -> execute();

    $arr = ['result' => 'delete_success'];

    die(json_encode($arr));

  } else if($mode == 'edit') {
    session_start();
    $_SESSION['edit_idx'] = $idx;

    $arr = ['result' => 'edit_success'];
    die(json_encode($arr));
  } else {
    $arr = ['result' => 'wrong_mode'];
    die(json_encode($arr)); // {"result" : "wrong_mode}  
  }
} else {
  // 비밀번호 오류시
  $arr = ['result' => 'wrong_password'];
  die(json_encode($arr)); // {"result" : "wrong_password}
}
