<?php

$str = 'qwe123qweqw12312';
echo $str;
echo "-----";
$i = 0;
$j = strlen($str) - 1;

while ($i<$j){
    $tmp  = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $tmp;
    $i++;
    $j--;
}

echo $str;
