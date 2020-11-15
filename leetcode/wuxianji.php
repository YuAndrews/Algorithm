<?php


$array = array(
array('id' => 1, 'pid' => 0, 'name' => '河北省'),
array('id' => 2, 'pid' => 0, 'name' => '北京市'),
array('id' => 3, 'pid' => 1, 'name' => '邯郸市'),
array('id' => 4, 'pid' => 2, 'name' => '朝阳区'),
array('id' => 5, 'pid' => 2, 'name' => '通州区'),
array('id' => 6, 'pid' => 4, 'name' => '望京'),
array('id' => 7, 'pid' => 4, 'name' => '酒仙桥'),
array('id' => 8, 'pid' => 3, 'name' => '永年区'),
array('id' => 9, 'pid' => 1, 'name' => '武安市'),
);

/**
 * 递归实现无限极分类
 * @param $array 分类数据
 * @param $pid 父ID
 * @param $level 分类级别
 * @return $list 分好类的数组 直接遍历即可 $level可以用来遍历缩进
 */

function getTree($array, $pid =0, $level = 0){
    $items = [];
    foreach ($array as $k=>$v){
        $items[$v['id']] = $v;
    }
    $tree = [];
    foreach ($items as $key => $item){
        if(isset($items[$item['pid']])){
            $items[$item['pid']]['son'][] = &$items[$key];
        }else{
            $tree[] = &$items[$key];
        }
    }
    return $tree;
}















function generateTree($array){
    //第一步 构造数据
    $items = array();
    foreach($array as $value){
        $items[$value['id']] = $value;
    }
    //第二部 遍历数据 生成树状结构
    $tree = array();
    foreach($items as $key => $item){
        if(isset($items[$item['pid']])){
            $items[$item['pid']]['son'][] = &$items[$key];
        }else{
            $tree[] = &$items[$key];
        }
    }
//    var_dump(json_encode($items));die;
    return $tree;
}

/*
 * 获得递归完的数据,遍历生成分类
 */
$array = getTree($array);
var_dump(json_encode($array));