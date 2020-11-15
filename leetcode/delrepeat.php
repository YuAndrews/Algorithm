<?php

$arr = [1,1,1,2,2,3,4,4,5,5,6,6,6,6,7,8,9,9];

/** 移除重复元素 以保存两个重复元素为例 leetcode 80 26  guangti  asdjkahsdjkas
 * @param $nums
 * @return int
 */
function delRepeat(&$nums){
    //题解思路一
//    $len = count($arr);
//    $count = 1;
//    $num = [];
//    for ($i=1;$i<$len;$i++){
//        if($arr[$i] == $arr[$i-1]){
//            $count++;
//            if($count>2){
//                $num[] = $i;
//                unset($arr[$i]);
//                $count--;
//            }
//        }else{
//            $count = 1;
//        }
//    }
//    if($num){
//        foreach ($num as $j){
//            unset($arr[$j]);
//        }
//    }
    //题解思路二
    $num=count($nums);
    if($num<=1){
        return $num;
    }

    for ($i=0;$i<$num;$i++){
        $j = $i+2;
        if(isset($nums[$j]) && $nums[$j] == $nums[$i]){
            unset($nums[$i]);
        }
    }
    return count($nums);

}
delRepeat($arr);
var_dump($arr);die;

function delRepeat26(&$nums){
//    $len = count($arr);
//    $count = 1;
//    $i = 0;
//    for ($j=1;$j<$len;$j++){
//        if($arr[$j] != $arr[$i]){
//            $i++;
//            $arr[$i]=$arr[$j];
//        }
//    }
//    return $i+1;
    $num=count($nums);
    if($num<=1){
        return $num;
    }

    for ($i=0;$i<$num;$i++){
        $j = $i+1;
        if(isset($nums[$j]) && $nums[$j] == $nums[$i]){
            unset($nums[$i]);
        }
    }
    return count($nums);
}
//var_dump(count(array_flip($arr)));die;


var_dump(delRepeat26($arr));
var_dump($arr);
