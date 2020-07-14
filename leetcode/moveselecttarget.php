<?php

$arr = [1,2,3,4,5,6,2,7,8,2];


//unset($arr[5]);
//var_dump($arr);
//
//die;

function moveEle(&$arr,$ele){
    $count = count($arr);
    $j = 0;
    for ($i=0;$i<$count;$i++){
        if($arr[$i] == $ele){
            unset($arr[$i]);
            $j++;
        }
    }
    return $j;
}
var_dump($arr);
$r = moveEle($arr,2);
var_dump($r);
var_dump($arr);