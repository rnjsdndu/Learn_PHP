<?php 
// PHP를 이용한 Form 폼 다루기

이름: echo $_POST['subject'] . '<br>';
암호: echo $_POST['password'] . '<br>';

// textarea에 개행하여 내용을 적어도 php에서는 소스보기를 하기 않는한 한줄로 나온다
// nl2br(): textarea에 적은대로 개행시켜 내용을 보여준다.
내용: echo nl2br($_POST['content']) . '<br>';


?>