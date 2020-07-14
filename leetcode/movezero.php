<?php


function _swap(&$arr,$a,$b){
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}
function moveZeroes(&$nums){
    $len = count($nums);
    $flag = 0;
    for ($i=0;$i<$len;$i++){
        if($nums[$i] != 0) {
            if ($i != $flag) {
                _swap($nums, $i, $flag);
            }
            $flag++;
        }
    }
}
$arr = [0,9,0,1,66,2,3,4,5,6,0,0];
moveZeroes($arr);
var_dump($arr);

die;

function moveZero($arr){
    $count = count($arr);
    $zero = [];
    for ($i=0;$i<$count;$i++){
        if($arr[$i] == 0){
            $zero[] = $arr[$i];
            unset($arr[$i]);
        }
    }
    if($zero){
        $arr = array_merge($arr,$zero);
    }
    return $arr;
}


$arr = [0,0,0,1,66,2,3,4,5,6,0,0,];
$arr = moveZero($arr);
var_dump($arr);
//$arr = [0, 1, 0, 156, 12];
//function my_sort($a, $b) {
//    if ($a !== 0) {
//        return 0;
//    }
//
//    return 1;
//}
//usort($arr, 'my_sort');
//var_dump($arr);