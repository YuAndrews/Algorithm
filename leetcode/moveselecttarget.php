<?php

$arr = [3,2,2,3];
/** leetcode 27
 * @param $arr
 * @param $ele
 * @return int
 */

//unset($arr[5]);
//var_dump($arr);
//
//die;

function moveEle(&$arr,$ele){
    $c = $count = count($arr);
    for ($i=0;$i<$c;$i++){
        if($arr[$i] == $ele){
            unset($arr[$i]);
            $count--;
        }
    }
    return $count;
}
var_dump($arr);
$r = moveEle($arr,3);
var_dump($r);
var_dump($arr);