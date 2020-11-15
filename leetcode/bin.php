<?php









/**
 * @param $arr
 * @param $target
 * @return bool|int asdasd  asdasdasdyuxiang
 */
function bin_search($arr,$target){
    $low = 0;
    $high = count($arr)-1;
    while($low<=$high){
        $mid = intval(($low+$high)/2);
        if($arr[$mid] == $target){
            return $mid;
        }else if($arr[$mid] > $target){
            $high = $mid-1;
        }else{
            $low = $mid+1;
        }

    }
    return false;
}
function bin_search2($arr,$target,$low,$high){
    if($low<=$high){
        $mid = intval(($low+$high)/2);
        if($arr[$mid] == $target){
            return $mid;
        }else if($arr[$mid] > $target){
            return bin_search2($arr,$target,$low,$mid-1);
        }else{
            return bin_search2($arr,$target,$mid+1,$high);
        }
    }
    return false;
}

$arr = [1,3,6,9,13,18,19,29,38,47,51,56,58,59,60,63,65,69,70,71,73,75,76,77,79,89];

echo bin_search($arr,79);
echo bin_search2($arr,79,0,count($arr)-1);