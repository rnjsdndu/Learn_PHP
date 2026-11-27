<?php 

$code = (isset($_GET['code']) && $_GET['code'] != '') ? $_GET['code'] : '';

switch($code) {
  case 'free' : $board_title = '자유게시판'; break;
  case 'notice' : $board_title = '공지사항'; break;
  default : $code = 'free'; $board_title = '자유게시판';
}