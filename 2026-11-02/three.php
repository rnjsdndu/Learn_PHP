<?php 
// PHP $_GET 과 $_POST 에 대해서 알아 봅니다.


// GET & Query String

// http://localhost/index.php?name=rnjsdn&company=google
print_r($_GET); // Array ( [name] => rnjsdn [company] => google )
echo "name: ". $_GET['name']; // name: rnjsdn
echo "<br>";
echo "company: ". $_GET['company']; // company: google

// REQUEST
print_r($_REQUEST); // Array ( [name] => rnjsdn [company] => google )
echo "name: ". $_REQUEST['name'];
echo "<br>";
echo "company: ". $_REQUEST['company'];

// POST
print_r($_POST); // Array ()
// Query String으로 넘어오는 파라미터들은 POST방식으로는 보이지 않는다
// 사용 예: 로그인 / 회원가입



// $_REQUEST는 GET인 상황과 POST인 상황 둘 다 사용할 수 있다






