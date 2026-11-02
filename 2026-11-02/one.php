<?php 
// PHP 수퍼전역 $GLOBALS

// 사용법
$GLOBALS['aaa'] = "안녕";

function aabb() {
  echo $GLOBALS['aaa'];
}

echo $aaa;

aabb();

// 사용법 2
function abc() {
  $GLOBALS['abc'] = "안녕안해";
}

abc();

echo $GLOBALS['abc'];
echo $abc;