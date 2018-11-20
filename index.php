<?php
/**
 * Created by PhpStorm.
 * User: 奶糖i
 * Date: 2018/11/20
 * Time: 8:25
 */

function NumberOf1($n)
{
    $count = 0;
    $flag = 1;
    while ($flag != 0) {
        if (($n & $flag) != 0) {
            $count++;
        }
        $flag = $flag << 1;
    }
    return $count;
}


//测试
$num=35;
echo $num."的二进制是".decbin($num)."<br/>";
echo $num."共有".NumberOf1($num)."个1";

