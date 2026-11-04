<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <!-- PHP에서 사용하는 filter의 목록을 보여준다 -->
  <?php 
    foreach(filter_list() as $id => $filter) {
      echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
    }
  ?>
</table>