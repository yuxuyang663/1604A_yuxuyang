<?php
/**
 * Created by PhpStorm.
 * User: 于旭阳
 * Date: 2018/11/14
 * Time: 8:29
 */
function asd($num1,$num2)
{
    while ($num2!=0)
    {
        $temp = $num1^$num2;
        $num2 = ($num1 & $num2)<<1;
        $num1 = $temp;
    }

    return $num1;
}
echo asd(100,1);

