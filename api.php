<?php
 
$x = $_POST['x'];
$y = $_POST['y'];
$n = $_POST['n'];

$start = ($n/2)+1;

for ($i = $start; $i < $n; $i++) {
    $sum = $y/($y-$i);
    $all_sum = $all_sum + $sum;
}

echo ($all_sum);
 
?>