<?php 
function my_pagination($total, $limit, $page_limit, $page) {
// 페이지 하단 출력 페이지 수 << 1 2 3 4 5 >>

$rs_str = '<nav aria-label="Page navigation example">';
$rs_str .= '<ul class="pagination justify-content-center">';


// ceil() : 올림
$total_page = ceil($total / $limit); // 총 페이지 수


// floor() : 버림
$start_page = (( floor(($page - 1) / $page_limit) ) * $page_limit) + 1;

$end_page = $start_page + $page_limit - 1;

$rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'">First</a></li>';

$prev_page = $start_page - 1;
if($prev_page > 1) {
  $rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev_page.'">Prev</a></li>';
}

if($end_page > $total_page) {
  $end_page = $total_page;
}

for($i = $start_page; $i <= $end_page; $i++) {
  if($page == $i) {
    $rs_str .= '<li class="page-item"><a class="page-link active">'.$i.'</a></li>';
  }else {
    $rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a></li>';
  }
}

$next_page = $end_page + 1;
if($next_page <= $total_page) {
  $rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next_page.'">Next</a></li>';
}

if($page < $total_page) {
  $rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$total_page.'">Last</a></li>';
}

$rs_str .= '</nav>';
$rs_str .= '</ul>';

return $rs_str;
  
}

?>