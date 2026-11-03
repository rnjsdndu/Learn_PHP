<?php 
// 정규표현식

$string = "Hello, world!";
$pattern = '/Hello/';
$pattern = '/hEllo/i'; // 대소문자 구분 안함

$cnt = preg_match($pattern, $string, $result); // bool 반환: 찾았다면 1, 아니라면 0

echo $cnt;

$string2 = "who is who";
// /^who/: 시작하는 위치에 있는 who 가져오기
$pattern2 = '/^who/';
// /who$/: 끝나는 위치에 있는 who 가져오기
$pattern2 = '/who$/';
$replacement2 = 'rice';

// before
echo $string; // who is who

// after
echo preg_replace($pattern2, $replacement2, $string2); // rice is who

// 패턴	        뜻	       매칭	       비매칭
// ^cat	    cat으로 시작	catfish  	  concat
// cat$	    cat으로 끝남	concat  	  catfish
// ^cat$    정확히 cat뿐	 cat	   catfish, concat

// 표현식에 사용되는 특수문자를 찾으려고 할 때 이스케이프(Escape ( \ )) 시켜줘야 한다
$string3 = "$12$ \-\ $25$";
$pattern3 = '/^\$12/'; // \$ - 이스케이프
$replacement3 = '!!!';

// before
echo $string3; // $12$ \-\ $25$

// after
echo preg_replace($pattern3, $replacement3, $string3); // !!!$ \-\ $25$


// .과 []

// any .
$anyString = "Reqular expressions4"; // target string
$anyReplacement = '=';

// 4글자씩 Requ/ar e/xpre/ssio/ns4
$pattern4 = '/..../';
echo preg_replace($pattern4, $anyReplacement, $anyString); // =================ns4

// 5글자씩 Requl/ar ex/press/ions4
$pattern5 = '/...../';
echo preg_replace($pattern5, $anyReplacement, $anyString); // ====================

// R뒤에 아무거나 한 글자
$pattern6 = '/R./';
echo preg_replace($pattern6, $anyReplacement, $anyString); // ==ular expressions4


// []
// o,w,y를 바꿔라
$bracketsString = "How do you do?";
$pattern7 = '/[owy]/';
$bracketsReplacement = '!';
echo preg_replace($pattern7, $bracketsReplacement, $bracketsString); // H!! d! !!! d!?



// 하이픈(-)
$HypenString = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
// 0~9까지의 숫자
$HypenPattern = '/[0-9]/';
// C~H까지의 알파벳
$HypenPattern = '/[C-H]/';
$HypenReplacement = '!';
echo preg_replace($HypenPattern, $HypenReplacement, $HypenString); // AB!!!!!!IJKLMNOPQRSTUVWXYZ

// Not(^)
// []안에서 ^을 사용하면 NOT
$NotString = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
// X~Z까지의 범위가 아닌것
$NotPattern = '/[^X-Z]/';


// 수량자 (Quantifier)
// * (0개 이상) {0,} - Greedy(탐욕적) 수량자 
// + (1개 이상) {1, } - Greedy(탐욕적) 수량자
// ? (0개 또는 1개) {0, 1} - Lazy(게으른) 수량자


// '/<b>(.*)</b>'
// '/<b>(.+)</b>'
<b>2</b> 3 4 <b>5 6 7</b> // 전부 선택된다

// '/<b>(.?)</b>'
<b>2</b> <b>5 6 7</b> // 선택










































