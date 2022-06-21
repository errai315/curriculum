<?php 
  $number = $_POST['number'];
  $fortune_num = substr($number, mt_rand(-1 * strlen($number),-1), 1);
?>

<p><?php echo date("Y/m/d", time()) ?>の運勢は</p>

<p>選ばれた数字は<?php echo $fortune_num; ?></p>

<p><?php

    if ($fortune_num == 0) {
      echo "凶";
    } elseif ($fortune_num <= 3) {
      echo "小吉";
    } elseif ($fortune_num <= 6) {
      echo "中吉";
    } elseif ($fortune_num <= 8) {
      echo "吉";
    } else {
      echo "大吉";
    }
?></p>