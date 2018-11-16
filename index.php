<?php
/**
 * Created by PhpStorm.
 * User: 于旭阳
 * Date: 2018/11/16
 * Time: 8:23
 */

function First($str){
$sr = chunk_split($str,1,',');
$sr = rtrim($sr,',');
$arr = explode(',',$sr);
$cnt = array_count_values($arr);
foreach ($cnt as $key=>$val){
    if ($val==1){
        return stripos($str,$key);
    }
}
return -1;
}
