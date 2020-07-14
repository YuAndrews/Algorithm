<?php

$arr = [1,1,1,2,2,3,4,4,5,5,6,6,6,6,7,8,9,9];

/**
 * 移除重复元素 以保存两个重复元素为例
 * @param $arr
 */
function delRepeat(&$arr){
    $len = count($arr);
    $count = 1;
    $num = [];
    for ($i=1;$i<$len;$i++){
        if($arr[$i] == $arr[$i-1]){
            $count++;
            if($count>2){
//                unset($arr[$i]);
//                var_dump($arr);die;
                $num[] = $i;
                $count--;
            }
        }else{
            $count = 1;
        }
    }
    if($num){
        foreach ($num as $j){
            unset($arr[$j]);
        }
    }
}

delRepeat($arr);
var_dump($arr);
