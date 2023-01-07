<?php
function selectionsort(&$Arr, $n) {
  for($i=0; $i<$n; $i++) {
    $min = $i;

    for($j=$i+1; $j<$n; $j++) {
      if($Arr[$j] < $Arr[$min])
      {$min = $j;}
    }

    $temp = $Arr[$min];
    $Arr[$min] = $Arr[$i];
    $Arr[$i] = $temp;
  }
}

function PrintArray($Arr, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $Arr[$i]." ";
  echo "\n"; 
}  

$MyArr = array(1, 10, 23, 50, 4, 9, -4);
$n = sizeof($MyArr); 
PrintArray($MyArr, $n);
?>