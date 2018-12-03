<?php
/**
 * Created by PhpStorm.
 * User: 于旭阳
 * Date: 2018/12/3
 * Time: 9:01
 */
define('APP_PATH', dirname(__FILE__));
require_once APP_PATH . '\autoLoad.php';
$Pm = explode('/',$_GET['c']);
$aa = (string)"new " .$Pm[0]."Controller()";
$C = eval("return $aa;");
$C->$Pm[1]();
